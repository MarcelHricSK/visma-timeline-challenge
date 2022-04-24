<?php

namespace App\Http\Controllers;

use App\Http\Requests\Event\UpdateEventRequest;
use App\Models\Event;
use App\Models\EventType;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController {
    public function index() {
        $profiles = Profile::all();
        return view('admin.profile.index', compact('profiles'));
    }

    public function create(Request $request) {
        return view('admin.profile.create');
    }

    public function edit(Request $request, $id) {
        $event = Profile::find($id);
        $types = EventType::all();
        return view('admin.profile.edit', compact('event', 'types'));
    }

    public function update(UpdateEventRequest $request, $id) {
        $event = Event::find($id);
        $event->update([
            'event_type_id' => $request->post('type'),
            'name' => $request->post('name'),
            'slug' => $request->post('slug'),
            'description' => $request->post('description'),
            'visible' => $request->post('visible') === 'on' ? 1 : 0,
            'content' => $request->post('content'),
        ]);
        return redirect(route('admin.profile.edit', ['profile' => $id]));
    }
}
