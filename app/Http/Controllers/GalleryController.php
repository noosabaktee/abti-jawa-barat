<?php


namespace App\Http\Controllers;

use App\Models\Gallery;

use App\Models\GalleryHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::latest()->paginate(10);
        $galleryHeader = GalleryHeader::first();

        return view('gallery.index', [
            'gallery' => $gallery,
            'galleryHeader' => $galleryHeader,
            'page' => 'gallery'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.add', [
            'page' => 'gallery'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'date'   => 'required|string|max:10',
            'galleries'   => 'nullable|string',
            'cover'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $galleries = [];
        for ($i = 1; $i <= 10; $i++) {
            $imagePath = null;
            if ($request->hasFile('image_' . $i)) {
                $imagePath = $request->file('image_' . $i)->store('gallery', 'public');
            }
            $galleries[] = [
                'name' => 'foto_' . $i,
                'image' => $imagePath
            ];
        }

        $coverPath = null;

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')
                ->store('gallery', 'public');
        }

        Gallery::create([
            'title'   => $request->title,
            'date'   => $request->date,
            'galleries'   => json_encode($galleries),
            'cover'   => $coverPath,
        ]);

        return redirect()->route('gallery.index')
            ->with('success', 'Gallery berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('gallery.show', [
            'gallery' => $gallery,
            'page' => 'show Gallery'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', [
            'gallery' => $gallery,
            'page' => 'edit Gallery'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'date'   => 'required|string|max:10',
            'galleries'   => 'nullable|string',
            'cover'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $coverPath = $gallery->cover;

        if ($request->hasFile('cover')) {

            if ($gallery->cover && Storage::disk('public')->exists($gallery->cover)) {
                Storage::disk('public')->delete($gallery->cover);
            }

            $coverPath = $request->file('cover')
                ->store('gallery', 'public');
        }

        $existingGalleries = json_decode($gallery->galleries, true) ?? [];
        $galleries = [];

        for ($i = 1; $i <= 10; $i++) {
            $existingImagePath = $existingGalleries[$i - 1]['image'] ?? null;
            $imagePath = $existingImagePath;

            if ($request->hasFile('image_' . $i)) {
                if ($existingImagePath && Storage::disk('public')->exists($existingImagePath)) {
                    Storage::disk('public')->delete($existingImagePath);
                }

                $imagePath = $request->file('image_' . $i)->store('gallery', 'public');
            }

            $galleries[] = [
                'name' => 'foto_' . $i,
                'image' => $imagePath
            ];
        }


        $gallery->update([
            'title'   => $request->title,
            'date'   => $request->date,
            'galleries'   => json_encode($galleries),
            'cover'   => $coverPath,
        ]);

        return redirect()->route('gallery.index')
            ->with('success', 'Gallery berhasil diperbarui');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateHeader(Request $request)
    {
        $validated = $request->validate([
            'black_title' => 'required|string|max:255',
            'red_title'   => 'required|string|max:255',
            'subtitle'    => 'required|string|max:500',
        ]);

        // Logic: Cari baris ID 1, kalau tidak ada maka buat baru (Create),
        // kalau ada maka timpa (Update).
        GalleryHeader::updateOrCreate(
            ['id' => 1],
            $validated
        );

        return redirect()->back()->with('success', 'Header galeri berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {

        if ($gallery->cover && Storage::disk('public')->exists($gallery->cover)) {
            Storage::disk('public')->delete($gallery->cover);
        }

        foreach (json_decode($gallery->galleries) as $item) {
            if ($item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }
        }

        $gallery->delete();

        return redirect()->route('gallery.index')
            ->with('success', 'Gallery berhasil dihapus');
    }
}
