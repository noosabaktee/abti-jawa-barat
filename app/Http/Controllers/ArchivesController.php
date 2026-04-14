<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\ArchiveHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchivesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $archive = Archive::latest()->paginate(10);
        $archiveHeader = ArchiveHeader::first();

        return view('archive.index', [
            'archive' => $archive,
            'archiveHeader' => $archiveHeader,
            'page' => 'archive'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('archive.add', [
            'page' => 'archive'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'meta'   => 'required|string|max:255',
            'doc'   => 'nullable|string',
        ]);

        $doc = [];
        for ($i = 1; $i <= 10; $i++) {
            $imagePath = null;
            $name = $request->input('doc_name_' . $i);
            if ($request->hasFile('doc_pdf_' . $i)) {
                $imagePath = $request->file('doc_pdf_' . $i)->store('archives', 'public');
            }
            $doc[] = [
                'name' => $name,
                'doc' => $imagePath
            ];
        }

        Archive::create([
            'title'   => $request->title,
            'meta'   => $request->meta,
            'doc'   => json_encode($doc),           
        ]);

        return redirect()->route('archive.index')
            ->with('success', 'archive berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(archive $archive)
    {
        return view('archive.show', [
            'archive' => $archive,
            'page' => 'show archive'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(archive $archive)
    {
        return view('archive.edit', [
            'archive' => $archive,
            'page' => 'edit archive'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, archive $archive)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'meta'   => 'required|string|max:255',
            'doc'   => 'nullable|string|max:255',
        ]);

        $existingDocs = json_decode($archive->doc, true) ?? [];
        $doc = [];

        for ($i = 1; $i <= 10; $i++) {
            $existingName = $existingDocs[$i - 1]['name'] ?? null;
            $existingDocPath = $existingDocs[$i - 1]['doc'] ?? null;

            $name = $request->input('doc_name_' . $i, $existingName);
            $docPath = $existingDocPath;

            if ($request->hasFile('doc_pdf_' . $i)) {
                if ($existingDocPath && Storage::disk('public')->exists($existingDocPath)) {
                    Storage::disk('public')->delete($existingDocPath);
                }

                $docPath = $request->file('doc_pdf_' . $i)->store('archives', 'public');
            }

            $doc[] = [
                'name' => $name,
                'doc' => $docPath
            ];
        }

        $archive->update([
            'title'   => $request->title,
            'meta'   => $request->meta,
            'doc'   => json_encode($doc),
        ]);

        return redirect()->route('archive.index')
            ->with('success', 'archive berhasil diperbarui');   
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateHeader(Request $request)
    {
        $validated = $request->validate([
            'eyebrow' => 'required|string|max:255',
            'title'   => 'required|string|max:255',
            'subtitle'    => 'required|string|max:500',
        ]);

        // Logic: Cari baris ID 1, kalau tidak ada maka buat baru (Create),
        // kalau ada maka timpa (Update).
        ArchiveHeader::updateOrCreate(
            ['id' => 1], 
            $validated
        );

        return redirect()->back()->with('success', 'Header galeri berhasil diperbarui!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(archive $archive)
    {
        if ($archive->image && Storage::disk('public')->exists($archive->image)) {
            Storage::disk('public')->delete($archive->image);
        }

        foreach (json_decode($archive->doc) as $item) {
            if ($item->doc && Storage::disk('public')->exists($item->doc)) {
                Storage::disk('public')->delete($item->doc);
            }
        }

        $archive->delete();

        return redirect()->route('archive.index')
            ->with('success', 'archive berhasil dihapus');
    }
}
