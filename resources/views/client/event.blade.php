@extends('client.templates.default')

@section('title', format_title_client('Explore Visma\'s stories'))

@section('has_menu', 1)

@section('content')
    <div class="content">
        <div class="event">
            <img class="event__image"
                 src="{{ $event->cover_image ?: asset('img/bg.png') }}"
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
