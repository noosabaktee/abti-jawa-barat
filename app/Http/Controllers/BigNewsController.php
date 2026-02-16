<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\BigNews;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BigNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $data = collect();

    // dummy data
    for ($i = 1; $i <= 35; $i++) {
        $data->push([
            'title' => 'Big News ' . $i,
            'link' => 'https://example.com/news-' . $i,
            'image' => $i % 2 == 0 ? 'image.jpg' : null,
        ]);
    }

    $perPage = 10;
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $currentItems = $data->slice(($currentPage - 1) * $perPage, $perPage)->values();

  $bignews = new LengthAwarePaginator(
    $currentItems,
    $data->count(),
    $perPage,
    $currentPage,
    ['path' => request()->url()]
);

    return view('big_news', [
        'bignews' => $bignews,   // INI YANG WAJIB ADA
        'page' => 'big-news'
    ]);
}

   public function store(Request $request)
{
    $request->validate([
        'title'   => 'required|string|max:255',
        'content' => 'nullable|string',
        'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
    ]);

    $slug = Str::slug($request->title);

    if (BigNews::where('slug', $slug)->exists()) {
        $slug .= '-' . time();
    }

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')
            ->store('bignews', 'public');
    }

    BigNews::create([
        'title'   => $request->title,
        'slug'    => $slug,
        'image'   => $imagePath,
        'content' => $request->content,
    ]);

    return redirect()->route('big_news.index')
        ->with('success', 'Big News berhasil ditambahkan');
}


    // ======================
    // SHOW
    // ======================
    public function show(BigNews $big_news)
    {
        return view('view-bignews', [
            'bignews' => $big_news,
            'page' => 'big-news'
        ]);
    }

    // ======================
    // EDIT
    // ======================
    public function edit(BigNews $big_news)
    {
        return view('edit-bignews', [
            'bignews' => $big_news,
            'page' => 'big-news'
        ]);
    }

    // ======================
    // UPDATE
    // ======================
    public function update(Request $request, BigNews $big_news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{

    return redirect()->route('big_news.index')
        ->with('success', 'Data berhasil dihapus');
}

}
