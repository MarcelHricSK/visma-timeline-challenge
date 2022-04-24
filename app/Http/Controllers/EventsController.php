<?php

namespace App\Http\Controllers;

use App\Http\Requests\Event\CreateEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;
use App\Models\Event;
use App\Models\EventType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController {
    public function index() {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    public function create(Request $request) {
        $types = EventType::all();
        return view('admin.event.create', compact('types'));
    }

    public function edit(Request $request, $id) {
        $event = Event::findOrFail($id);
        $types = EventType::all();
        return view('admin.event.edit', compact('event', 'types'));
    }

    public function update(UpdateEventRequest $request, $id) {
        $event = Event::findOrFail($id);
        $event->update([
            'event_type_id' => $request->post('type'),
            'name' => $request->post('name'),
            'slug' => $request->post('slug'),
            'description' => $request->post('description'),
            'cover_image' => $request->post('image'),
            'visible' => $request->post('visible') === 'on' ? 1 : 0,
            'content' => $request->post('content'),
            'start_date' => $request->post('start_date'),
            'end_date' => $request->post('end_date'),
            'location' => $request->post('location'),
        ]);
        return redirect(route('admin.event.edit', ['event' => $id]));
    }

    public function store(CreateEventRequest $request) {
        Event::create([
            'event_type_id' => $request->post('type'),
            'name' => $request->post('name'),
            'slug' => $request->post('slug'),
            'cover_image' => $request->post('image'),
            'description' => $request->post('description'),
            'visible' => $request->post('visible') === 'on' ? 1 : 0,
            'content' => $request->post('content'),
            'start_date' => $request->post('start_date'),
            'end_date' => $request->post('end_date'),
            'location' => $request->post('location'),
        ]);
        return redirect(route('admin.event.index'));
    }
}
