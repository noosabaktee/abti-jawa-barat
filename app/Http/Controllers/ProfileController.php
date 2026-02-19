<?php

namespace App\Http\Controllers;

use App\Models\ProfileClub;
use App\Models\ProfileHeader;
use App\Models\ProfileHero;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = ProfileClub::latest()->paginate(10);
        $indoors = ProfileHero::where('type', 'indoor')->latest()->paginate(10);
        $beaches = ProfileHero::where('type', 'beach')->latest()->paginate(10);
        $profileHeader = ProfileHeader::first();

        return view('profile.index', [
            'clubs' => $clubs,
            'indoors' => $indoors,
            'beaches' => $beaches,
            'profileHeader' => $profileHeader,
            'page' => 'profile'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'black_title' => 'required|string|max:255',
            'red_title'   => 'required|string|max:255',
            'subtitle'    => 'required|string|max:500',
        ]);

        // Logic: Cari baris ID 1, kalau tidak ada maka buat baru (Create),
        // kalau ada maka timpa (Update).
        ProfileHeader::updateOrCreate(
            ['id' => 1], 
            $validated
        );

        return redirect()->back()->with('success', 'Header profile berhasil diperbarui!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
    public function destroy(string $id)
    {
        //
    }
}
