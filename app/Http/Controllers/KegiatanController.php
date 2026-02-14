<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
   public function index()
{
    $kegiatan = Kegiatan::latest()->paginate(10);

    return view('kegiatan', [
        'kegiatan' => $kegiatan,
        'page' => 'kegiatan'
    ]);
}


    public function create()
    {
        return view('add-kegiatan', [
            'page' => 'kegiatan'
        ]);
    }

    public function store(Request $request)
{
    $request->validate([
        'name'  => 'required|string|max:255',
        'date'  => 'required|date',
        'desc'  => 'required|string',
        'slug'  => 'nullable|url',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('kegiatan', 'public');
    }

    \App\Models\Kegiatan::create([
        'name'  => $request->name,
        'date'  => $request->date,
        'desc'  => $request->desc,
        'slug'  => $request->slug,
        'image' => $imagePath,
    ]);

    return redirect()
        ->route('kegiatan.index')
        ->with('success', 'Kegiatan berhasil ditambahkan');
}
    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        return view('view-kegiatan', [
            'kegiatan' => $kegiatan,
            'page' => 'kegiatan'
        ]);
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        return view('edit-kegiatan', [
            'kegiatan' => $kegiatan,
            'page' => 'kegiatan'
        ]);
    }

    public function update(Request $request, Kegiatan $kegiatan)
{
    $request->validate([
        'name'  => 'required|string|max:255',
        'date'  => 'required|date',
        'desc'  => 'required|string',
        'slug'  => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $data = $request->only([
        'name',
        'date',
        'desc',
        'slug'
    ]);

    if ($request->hasFile('image')) {

        // optional: hapus image lama
        if ($kegiatan->image && \Storage::disk('public')->exists($kegiatan->image)) {
            \Storage::disk('public')->delete($kegiatan->image);
        }

        $data['image'] = $request->file('image')->store('kegiatan', 'public');
    }

    $kegiatan->update($data);

    return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Kegiatan berhasil diperbarui.');
}


    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();

        return redirect()->route('kegiatan.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
