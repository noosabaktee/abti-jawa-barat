<?php

namespace App\Http\Controllers;

use App\Models\Live;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $live = Live::latest()->paginate(10);

        return view('live.index', [
            'live' => $live,
            'page' => 'live'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('live.add', [
            'page' => 'live'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'link'   => 'required|string|max:255',
            'date'   => 'required|string|max:255',
            'time'   => 'required|string|max:255',
        ]);

        Live::create([
            'title'   => $request->title,
            'link'    => $request->link,
            'date'   => $request->date,
            'time'   => $request->time,
        ]);



        return redirect()->route('live.index')
            ->with('success', 'Live Content berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function extractVideoId($url)
    {
        preg_match(
            '/(youtu\.be\/|v=|\/live\/|embed\/)([a-zA-Z0-9_-]+)/',
            $url,
            $matches
        );

        return $matches[2] ?? null;
    }

    public function show(Live $live)
    {
        $link = $live->link; // Asumsikan link yang disimpan adalah videoId YouTube

        // extract videoId dari link
        $videoId = $this->extractVideoId($link);

        return view('live.show', [
            'live' => $live,
            'videoId' => $videoId,
            'page' => 'show live content'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Live $live)
    {
        return view('live.edit', [
            'live' => $live,
            'page' => 'edit live content'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Live $live)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'link'   => 'required|string|max:255',
            'date'   => 'required|string|max:255',
            'time'   => 'required|string|max:255',
        ]);



        $live->update([
            'title'   => $request->title,
            'link'    => $request->link,
            'date'   => $request->date,
            'time'   => $request->time,
        ]);

        return redirect()->route('live.index')
            ->with('success', 'Live Content berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Live $live)
    {
        $live->delete();

        return redirect()->route('live.index')
            ->with('success', 'Live Content berhasil dihapus');
    }
}
