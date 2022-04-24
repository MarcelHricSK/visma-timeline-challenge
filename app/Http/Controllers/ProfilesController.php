<?php

namespace App\Http\Controllers;

use App\Http\Requests\Event\UpdateEventRequest;
use App\Http\Requests\Profile\CreateProfileRequest;
use App\Http\Requests\Profile\UpdateProfileRequest;
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
        $profile = Profile::findOrFail($id);
        $types = EventType::all();
        return view('admin.profile.edit', compact('profile', 'types'));
    }

    public function update(UpdateProfileRequest $request, $id) {
        $profile = Profile::findOrFail($id);
        $profile->update([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'role' => $request->post('role'),
            'started_at' => $request->post('started_at'),
            'links' => [],
            'visible' => $request->post('visible') === 'on' ? 1 : 0,
            'content' => $request->post('content'),
        ]);
        return redirect(route('admin.profile.edit', ['profile' => $id]));
    }

    public function store(CreateProfileRequest $request) {
        Profile::create([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'role' => $request->post('role'),
            'started_at' => $request->post('started_at'),
            'links' => [],
            'visible' => $request->post('visible') === 'on' ? 1 : 0,
            'content' => $request->post('content'),
        ]);
        return redirect(route('admin.profile.index'));
    }
}
