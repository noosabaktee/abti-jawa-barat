<?php

namespace App\Http\Controllers;

use App\Models\Short;
use Illuminate\Http\Request;

class ShortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news_content.short.add', [
            'page' => 'shorts'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'url'   => 'required|string|max:255',
        ]);

       
        Short::create([
            'title'   => $request->title,
            'url' => $request->url,
        ]);

        return redirect()->route('news-content.index')
            ->with('success', 'Short Content berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Short $short)
    {
        return view('news_content.short.show', [
            'short' => $short,
            'page' => 'show Short content'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Short $short)
    {
        return view('news_content.short.edit', [
            'short' => $short,
            'page' => 'edit Short content'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Short $short)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'url'   => 'required|string|max:255',
        ]);

       
        $short->update([
           'title'   => $request->title,
            'url' => $request->url,
        ]);

        return redirect()->route('news-content.index')
            ->with('success', 'Short Content berhasil diubah');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Short $short)
    {
        $short->delete();


        return redirect()->route('news-content.index')
            ->with('success', 'Short Content berhasil dihapus');
    }
}
