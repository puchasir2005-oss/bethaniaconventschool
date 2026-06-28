<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Public events page — all events with descriptions.
     */
    public function index()
    {
        $events = Event::where('is_active', true)
            ->orderBy('event_date', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('events', compact('events'));
    }

    /**
     * API endpoint for home page carousel.
     */
    public function getActive()
    {
        $events = Event::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->title,
                    'poster_url' => asset('storage/' . $event->poster_image),
                    'event_date' => $event->event_date ? $event->event_date->format('d M Y') : null,
                ];
            });

        return response()->json($events);
    }

    /**
     * Admin: store a new event.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:2000',
            'poster_image' => 'required|image|mimes:jpeg,jpg,png,webp|max:5120',
            'event_date' => 'nullable|date',
        ]);

        $posterPath = $request->file('poster_image')->store('events', 'public');

        Event::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'poster_image' => $posterPath,
            'event_date' => $validated['event_date'] ?? null,
            'is_active' => true,
        ]);

        return redirect('/admin/dashboard')->with('success', 'Event created successfully!');
    }

    /**
     * Admin: delete an event.
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->poster_image) {
            Storage::disk('public')->delete($event->poster_image);
        }

        $event->delete();

        return redirect('/admin/dashboard')->with('success', 'Event deleted successfully!');
    }
}
