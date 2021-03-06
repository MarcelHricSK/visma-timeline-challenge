<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'client.'], function () {
    Route::get('/', function (\Illuminate\Http\Request $request) {
        $events = \App\Models\Event::where('visible', 1);

        if ($request->get('search')) {
            $events = $events->where('name', 'LIKE', '%' . $request->get('search') . '%');
        }

        if ($events->count() == 0) {
            return abort(404);
        }

        $events = $events->orderBy('start_date', 'DESC')->get();
        $minYear = $events->min('start_date')->format('Y');
        $maxYear = $events->max('start_date')->format('Y');
        return view('client.index', compact('events', 'minYear', 'maxYear'));
    })->name('index');

    Route::get('/tv', function () {
        $events = \App\Models\Event::where('visible', 1)->orderBy('start_date', 'DESC')->get();
        $minYear = $events->min('start_date')->format('Y');
        $maxYear = $events->max('start_date')->format('Y');
        return view('client.tv', compact('events', 'minYear', 'maxYear'));
    })->name('tv');

    Route::get('/event/{event}', function ($slug) {
        $event = \App\Models\Event::where('slug', $slug)->first();
        return view('client.event', compact('event'));
    })->name('event');
});
