<?php

namespace App\Http\Controllers;

use App\Models\ProfileClub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileClubController extends Controller
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
        return view('profile.club.add', [
            'page' => 'profile-club'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'city'  => 'required|string|max:255',
            'director'  => 'required|string|max:255',
            'admin'  => 'required|string|max:255',
            'technical_director'  => 'required|string|max:255',
            'training_venue'  => 'required|string|max:255',
            'email'  => 'required|string|max:255',
            'contact_person'  => 'required|string|max:255',
            'link'  => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $imagePath = null;

        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')
                ->store('profile_club', 'public');
        }

        ProfileClub::create([
            'name'   => $request->name,
            'city'   => $request->city,
            'director'   => $request->director,
            'admin'   => $request->admin,
            'technical_director'   => $request->technical_director,
            'training_venue'   => $request->training_venue,
            'email'   => $request->email,
            'contact_person'   => $request->contact_person,
            'link'   => $request->link,
            'logo'   => $imagePath,
        ]);

        return redirect()->route('profile.index')
            ->with('success', 'Profile Club berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfileClub $ProfileClub)
    {
        return view('profile.club.show', [
            'ProfileClub' => $ProfileClub,
            'page' => 'show profile club'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfileClub $ProfileClub)
    {
        return view('profile.club.edit', [
            'ProfileClub' => $ProfileClub,
            'page' => 'edit profile club'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfileClub $ProfileClub)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'city'   => 'required|string|max:255',
            'director'   => 'required|string|max:255',
            'admin'   => 'required|string|max:255',
            'technical_director'   => 'required|string|max:255',
            'training_venue'   => 'required|string|max:255',
            'email'   => 'required|string|max:255',
            'contact_person'   => 'required|string|max:255',
            'link'  => 'required|string|max:255',
            'logo'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);


        $imagePath = $ProfileClub->logo;

        if ($request->hasFile('logo')) {

            if ($ProfileClub->logo && Storage::disk('public')->exists($ProfileClub->logo)) {
                Storage::disk('public')->delete($ProfileClub->logo);
            }

            $imagePath = $request->file('logo')
                ->store('profile_club', 'public');
        }

        $ProfileClub->update([
            'name'   => $request->name,
            'city'   => $request->city,
            'director'   => $request->director,
            'admin'   => $request->admin,
            'technical_director'   => $request->technical_director,
            'training_venue'   => $request->training_venue,
            'email'   => $request->email,
            'contact_person'   => $request->contact_person,
            'link'  => $request->link,
            'logo'   => $imagePath,
        ]);

        return redirect()->route('profile.index')
            ->with('success', 'Profile Club berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileClub $ProfileClub)
    {
        if ($ProfileClub->logo && Storage::disk('public')->exists($ProfileClub->logo)) {
            Storage::disk('public')->delete($ProfileClub->logo);
        }

        $ProfileClub->delete();

        return redirect()->route('profile.index')
            ->with('success', 'Profile Club berhasil dihapus');
    }
}
