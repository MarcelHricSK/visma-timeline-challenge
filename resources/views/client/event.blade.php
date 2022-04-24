@extends('client.templates.default')

@section('title', format_title_client('Explore Visma\'s stories'))

@section('has_menu', 1)

@section('content')
    <div class="content">
        <div class="event">
            <img class="event__image"
                 src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80"
                 alt="">
            <div class="event__content">
                <h1 class="heading heading--1">{{ $event->name }}</h1>
                <p class="subheading mb-8">
                    {{ $event->type->name }}, {{ $event->start_date->format('Y') }}{{ $event->location ? ', ' . $event->location : null }}
                </p>
                <div class="event__split">
                    <div>
                        {!! $event->content !!}
                    </div>
                    <div>
                        @isset($event->data['profile_id'])
                            {{ \App\Models\Profile::find($event->data['profile_id'])->first()->first_name }}
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
