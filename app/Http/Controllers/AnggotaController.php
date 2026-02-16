<?php

namespace App\Http\Controllers;

use App\Models\Anggota;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::latest()->paginate(10);

        return view('anggota', [
            'anggota' => $anggota,
            'page' => 'anggota'
        ]);
    }

    public function create()
    {
        return view('add-anggota', [
            'page' => 'anggota'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'city'      => 'required|string|max:255',
            'lead_name' => 'required|string|max:255',
            'sec_name'  => 'required|string|max:255',
            'email'     => 'nullable|email',
            'link'      => 'nullable|url',
            'logo'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')
                ->store('anggota', 'public');
        }

        Anggota::create($validated);

        return redirect()
            ->route('anggota.index')
            ->with('success', 'Anggota berhasil ditambahkan');
    }

    public function show(Anggota $anggota)
    {
        return view('view-anggota', [
            'anggota' => $anggota,
            'page' => 'anggota'
        ]);
    }

    public function edit(Anggota $anggota)
    {
        return view('edit-anggota', [
            'anggota' => $anggota,
            'page' => 'anggota'
        ]);
    }

    public function update(Request $request, Anggota $anggota)
    {
        $validated = $request->validate([
            'city'      => 'required|string|max:255',
            'lead_name' => 'required|string|max:255',
            'sec_name'  => 'required|string|max:255',
            'email'     => 'nullable|email',
            'link'      => 'nullable|url',
            'logo'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {

            if ($anggota->logo && Storage::disk('public')->exists($anggota->logo)) {
                Storage::disk('public')->delete($anggota->logo);
            }

            $validated['logo'] = $request->file('logo')
                ->store('anggota', 'public');
        }

        $anggota->update($validated);

        return redirect()
            ->route('anggota.index')
            ->with('success', 'Anggota berhasil diperbarui');
    }

    public function destroy(Anggota $anggota)
    {
        if ($anggota->logo && Storage::disk('public')->exists($anggota->logo)) {
            Storage::disk('public')->delete($anggota->logo);
        }

        $anggota->delete();

        return redirect()
            ->route('anggota.index')
            ->with('success', 'Anggota berhasil dihapus');
    }
}
