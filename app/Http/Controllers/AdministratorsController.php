<?php

namespace App\Http\Controllers;

use App\Http\Requests\Event\UpdateEventRequest;
use App\Http\Requests\Profile\CreateProfileRequest;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Models\Administrator;
use App\Models\Event;
use App\Models\EventType;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdministratorsController {
    public function index() {
        $administrators = Administrator::all();
        return view('admin.administrator.index', compact('administrators'));
    }

    public function create(Request $request) {
        return view('admin.administrator.create');
    }

    public function edit(Request $request, $id) {
        $administrator = Administrator::findOrFail($id);
        return view('admin.administrator.edit', compact('administrator'));
    }

    public function update(Request $request, $id) {
        $administrator = Administrator::findOrFail($id);
        $administrator->update([
            'name' => $request->post('name'),
        ]);
        return redirect(route('admin.administrator.edit', ['administrator' => $id]));
    }

    public function store(Request $request) {
        if ($request->post('password') == $request->post('repeat_password')) {
            Administrator::create([
                'name' => $request->post('name'),
                'email' => $request->post('email'),
                'password' => Hash::make($request->post('password')),
            ]);
        }
        return redirect(route('admin.administrator.index'));
    }

    public function changePassword(Request $request, $id) {
        $administrator = Administrator::findOrFail($id);
        if (
            Hash::check($request->post('old_password'), $administrator->password)
            && $request->post('password') == $request->post('repeat_password')
        ) {
            $administrator->update([
                'password' => Hash::make($request->post('password')),
            ]);
        }
        return redirect(route('admin.administrator.index'));
    }
}
