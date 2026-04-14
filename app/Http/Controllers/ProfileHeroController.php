<?php

namespace App\Http\Controllers;

use App\Models\ProfileHero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileHeroController extends Controller
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
        return view('profile.hero.add', [
            'page' => 'profile-hero'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'desc'   => 'required|string|max:255',
            'type' => 'nullable|string|max:255',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')
                ->store('profile_hero', 'public');
        }

        ProfileHero::create([
            'title'   => $request->title,
            'desc'   => $request->desc,
            'image'   => $imagePath,
            'type'   => $request->type,
        ]);

        return redirect()->route('profile.index')
            ->with('success', 'Profile Hero berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfileHero $ProfileHero)
    {
        return view('profile.hero.show', [
            'ProfileHero' => $ProfileHero,
            'page' => 'show Profile Hero'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfileHero $ProfileHero)
    {
        return view('profile.hero.edit', [
            'ProfileHero' => $ProfileHero,
            'page' => 'edit Profile Hero'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfileHero $ProfileHero)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'desc'   => 'required|string|max:255',
            'type' => 'nullable|string|max:255',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);


        $imagePath = $ProfileHero->image;

        if ($request->hasFile('image')) {

            if ($ProfileHero->image && Storage::disk('public')->exists($ProfileHero->image)) {
                Storage::disk('public')->delete($ProfileHero->image);
            }

            $imagePath = $request->file('image')
                ->store('profile_hero', 'public');
        }

        $ProfileHero->update([
            'title'   => $request->title,
            'desc'   => $request->desc,
            'type'   => $request->type,
            'image'   => $imagePath,
        ]);

        return redirect()->route('profile.index')
            ->with('success', 'Profile Hero berhasil diperbarui');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileHero $ProfileHero)
    {
        if ($ProfileHero->image && Storage::disk('public')->exists($ProfileHero->image)) {
            Storage::disk('public')->delete($ProfileHero->image);
        }

        $ProfileHero->delete();

        return redirect()->route('profile.index')
            ->with('success', 'Profile Hero berhasil dihapus');
    }
}
