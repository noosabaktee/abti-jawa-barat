<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::latest()->paginate(10);
        $eventHeader = EventHeader::first();


        return view('event.index', [
            'event' => $event,
            'eventHeader' => $eventHeader,
            'page' => 'event'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event.add', [
            'page' => 'event'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_id'   => 'nullable|string|max:255',
            'name'   => 'required|string|max:255',
            'category'   => 'required|string|max:100',
            'loc'   => 'required|string|max:10',
            'athletes'   => 'required|string|max:255',
            'coaches'   => 'required|string|max:255',
            'teams'   => 'required|string|max:255',
            'management'   => 'required|string|max:255',
            'audience_offline'   => 'required|string|max:255',
            'website'   => 'required|string|max:255',
            'administrator'   => 'required|string|max:255',
            'logo'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'cover'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    

        $logoPath = null;
        $coverPath = null;

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')
                ->store('event', 'public');
        }

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')
                ->store('event', 'public');
        }

        Event::create([
            'event_id'   => $request->event_id,
            'name'   => $request->name,
            'category'   => $request->category,
            'loc'   => $request->loc,
            'athletes'   => $request->athletes,
            'coaches'   => $request->coaches,
            'teams'   => $request->teams,
            'management'   => $request->management,
            'audience_offline'   => $request->audience_offline,
            'website'   => $request->website,
            'administrator'   => $request->administrator,
            'logo'   => $logoPath,
            'cover'   => $coverPath
        ]);

        return redirect()->route('event.index')
            ->with('success', 'Event berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('event.show', [
            'event' => $event,
            'page' => 'show Event'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('event.edit', [
            'event' => $event,
            'page' => 'edit Event'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'event_id'   => 'nullable|string|max:255',
            'name'   => 'required|string|max:255',
            'category'   => 'required|string|max:100',
            'loc'   => 'required|string|max:10',
            'athletes'   => 'required|string|max:255',
            'coaches'   => 'required|string|max:255',
            'teams'   => 'required|string|max:255',
            'management'   => 'required|string|max:255',
            'audience_offline'   => 'required|string|max:255',
            'website'   => 'required|string|max:255',
            'administrator'   => 'required|string|max:255',
            'logo'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'cover'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        $logoPath = $event->logo;
        $coverPath = $event->cover;

        if ($request->hasFile('logo')) {
            if ($event->logo && Storage::disk('public')->exists($event->logo)) {
                Storage::disk('public')->delete($event->logo);
            }
            $logoPath = $request->file('logo')->store('event', 'public');
        }

        if ($request->hasFile('cover')) {
            if ($event->cover && Storage::disk('public')->exists($event->cover)) {
                Storage::disk('public')->delete($event->cover);
            }
            $coverPath = $request->file('cover')->store('event', 'public');
        }

        $event->update([
            'event_id'   => $request->event_id,
            'name'   => $request->name,
            'category'   => $request->category,
            'loc'   => $request->loc,
            'athletes'   => $request->athletes,
            'coaches'   => $request->coaches,
            'teams'   => $request->teams,
            'management'   => $request->management,
            'audience_offline'   => $request->audience_offline,
            'website'   => $request->website,
            'administrator'   => $request->administrator,
            'logo'   => $logoPath,
            'cover'   => $coverPath
        ]);

        return redirect()->route('event.index')
            ->with('success', 'Event berhasil diperbarui');   
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
        EventHeader::updateOrCreate(
            ['id' => 1], 
            $validated
        );

        return redirect()->back()->with('success', 'Header event berhasil diperbarui!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if ($event->logo && Storage::disk('public')->exists($event->logo)) {
            Storage::disk('public')->delete($event->logo);
        }

        if ($event->cover && Storage::disk('public')->exists($event->cover)) {
            Storage::disk('public')->delete($event->cover);
        }

        $event->delete();

        return redirect()->route('event.index')
            ->with('success', 'Event berhasil dihapus');
    }
}
