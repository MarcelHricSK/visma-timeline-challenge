<?php

namespace App\Http\Controllers;

use App\Http\Requests\Event\CreateEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;
use App\Models\Event;
use App\Models\EventType;
use App\Models\Medium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController {
    public function index() {
        $media = Medium::all();
        return view('admin.media.index', compact('media'));
    }

    public function create(Request $request) {
        return view('admin.media.create');
    }

    public function edit(Request $request, $id) {
        $medium = Medium::findOrFail($id);
        return view('admin.media.edit', compact('medium'));
    }

    public function update(Request $request, $id) {
        $medium = Medium::findOrFail($id);
        $medium->update([
            'title' => $request->post('title'),
            'description' => $request->post('description'),
        ]);
        return redirect(route('admin.media.edit', ['medium' => $id]));
    }

    public function store(Request $request) {
        $errors = [];
        foreach ($request->file('files') as $uploadedFile) {
            if (in_array($uploadedFile->extension(), ['jpg', 'jpeg', 'png'])) {
                $file = Storage::disk('media')->putFile('', $uploadedFile);
                Medium::create(
                    [
                        'url' => $file,
                        'type' => $uploadedFile->extension(),
                    ]
                );
            } else {
                $errors['files'][] = trans('core::app.context.medium.invalid_extension', ['name' => $uploadedFile->getClientOriginalName()]);
            }
        }
        if (count($errors) > 0) {
            return redirect(route('admin.media.create'))->withErrors($errors);
        }
        return redirect(route('admin.media.index'));
    }
}
