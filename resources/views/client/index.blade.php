@extends('client.templates.default')

@section('title', format_title_client('Explore Visma\'s stories'))

@section('has_menu', 1)

@section('content')
    <div class="content">
        <div class="timeline">
            <ul class="timeline__years">
                @for($i = $maxYear; $i >= $minYear; $i--)
                    <li class="timeline__year{{ $i === $maxYear ? ' timeline__year--active' : null }}">{{ $i }}</li>

                @endfor
            </ul>
            <div class="timeline__cards">
                <div class="left">
                    <div class="timeline__separator timeline__separator--rev"></div>
                    @foreach($events as $i => $event)
                        @if($i % 2 == 0)
                            <div class="timeline__card-wrapper">
                                <div data-href="{{ route('client.event', ['event' => $event->slug]) }}"
                                     class="timeline__card{{ $i % 2 ? ' timeline__card--alt' : null }}">
                                    <img class="timeline__img mb-2"
                                         src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80"
                                         alt="">
                                    <h2 class="timeline__heading heading heading--2">{{ $event->name }}</h2>
                                    <span class="timeline__sub mb-2">{{ $event->type->name }}</span>
                                    <p class="timeline__description mb-4">{{ $event->description }}</p>
                                    <a href="{{ route('client.event', ['event' => $event->slug]) }}" class="button">Read
                                        more</a>
                                </div>
                            </div>

                            <div class="timeline__separator timeline__separator--rev"></div>
                        @endif
                    @endforeach
                </div>
                <div class="right">
                    <div class="timeline__separator"></div>
                    @foreach($events as $i => $event)
                        @if($i % 2 == 1)

                            <div class="timeline__card-wrapper">
                                <div data-href="{{ route('client.event', ['event' => $event->slug]) }}"
                                     class="timeline__card{{ $i % 2 ? ' timeline__card--alt' : null }}">
                                    <img class="timeline__img mb-2"
                                         src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80"
                                         alt="">
                                    <h2 class="timeline__heading heading heading--2">{{ $event->name }}</h2>
                                    <span class="timeline__sub mb-2">{{ $event->type->name }}</span>
                                    <p class="timeline__description mb-4">{{ $event->description }}</p>
                                    <a href="{{ route('client.event', ['event' => $event->slug]) }}" class="button">Read
                                        more</a>
                                </div>
                            </div>

                            <div class="timeline__separator"></div>
                        @endif

                    @endforeach
                </div>

            </div>
        </div>

    </div>
    <script>

    </script>
@endsection
