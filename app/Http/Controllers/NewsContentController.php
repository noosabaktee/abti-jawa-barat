<?php

namespace App\Http\Controllers;

use App\Exports\NewsExport;
use App\Models\News;
use App\Models\Short;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class NewsContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsContent = News::latest()->paginate(10);
        $shortContent = Short::latest()->paginate(10);

        return view('news_content.index', [
            'news' => $newsContent,
            'short' => $shortContent,
            'page' => 'news-content'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news_content.add', [
            'page' => 'news-content'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category'   => 'required|string|max:100',
            'title'   => 'required|string|max:255',
            'content'   => 'required|string|max:1000',
            'cta_text'   => 'required|string|max:255',
            'youtube_url'   => 'required|string|max:255',
        ]);

        $slug = Str::slug($request->title);

        if (News::where('slug', $slug)->exists()) {
            $slug .= '-' . time();
        }

        News::create([
            'title'   => $request->title,
            'slug'    => $slug,
            'category'   => $request->category,
            'content'   => $request->content,
            'cta_text' => $request->cta_text,
            'youtube_url' => $request->youtube_url,
        ]);

        return redirect()->route('news-content.index')
            ->with('success', 'News Content berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $newsContent)
    {
        return view('news_content.show', [
            'news' => $newsContent,
            'page' => 'show news content'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $newsContent)
    {
        return view('news_content.edit', [
            'news' => $newsContent,
            'page' => 'edit news content'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $newsContent)
    {
        $request->validate([
            'category'   => 'required|string|max:100',
            'title'   => 'required|string|max:255',
            'content'   => 'required|string|max:1000',
            'cta_text'   => 'required|string|max:255',
            'youtube_url'   => 'required|string|max:255',
        ]);

        // Generate slug baru
        $slug = Str::slug($request->title);

        if (
            News::where('slug', $slug)
            ->where('id', '!=', $newsContent->id)
            ->exists()
        ) {
            $slug .= '-' . time();
        }

        $newsContent->update([
           'title'   => $request->title,
            'slug'    => $slug,
            'category'   => $request->category,
            'content'   => $request->content,
            'cta_text' => $request->cta_text,
            'youtube_url' => $request->youtube_url,
        ]);

        return redirect()->route('news-content.index')
            ->with('success', 'News Content berhasil diubah');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $newsContent)
    {
        $newsContent->delete();

        return redirect()->route('news-content.index')
            ->with('success', 'News Content berhasil dihapus');
    }

    public function export() 
    {
        return Excel::download(new NewsExport, 'news.xlsx');
    }
}
