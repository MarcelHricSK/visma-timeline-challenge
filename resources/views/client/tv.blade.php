@extends('client.templates.plain')

@section('title', format_title_client('Explore Visma\'s stories'))

@section('has_menu', 1)

@section('content')
    <div class="content">
        <div class="tv">
            @foreach($events as $i => $event)
                <div class="tv__slide{{ $i == 0 ? ' tv__slide--active' : null }}">
                    <div class="tv__card-wrapper">
                        <div data-href="{{ route('client.event', ['event' => $event->slug]) }}"
                             class="tv__card{{ $i % 2 ? ' timeline__card--alt' : null }}"
                             data-year="{{ $event->start_date->format('Y') }}">
                            <img class="tv__img mb-2"
                                 src="{{ $event->cover_image ?: asset('img/bg.png') }}"
                                 alt="">
                            <div class="tv__card-content">
                                <img class="tv__qr mb-8"
                                     src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ route('client.event', ['event' => $event->slug]) }}"
                                     alt="">
                                <h2 class="tv__heading heading heading--2">{{ $event->name }}</h2>
                                <span
                                    class="tv__sub mb-8">{{ $event->type->name }}, {{ $event->start_date->format('Y') }}</span>
                                <p class="tv__description mb-4">{{ $event->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="line"></div>
    </div>

    </div>
    <script>
        let slide = 1;
        const slidesCount = {{ $events->count() }};

        function setSlide(index) {
            $('.tv__slide').removeClass('tv__slide--active')
            $('.tv__slide:nth-of-type(' + index + ')').addClass('tv__slide--active')
        }

        setInterval(function () {
            if (slide >= slidesCount) {
                slide = 0
            }
            setSlide(slide + 1)
            slide++
        }, 10000)

        $(window).on('keydown', function (e) {
            if (e.key == 'Escape') {
                window.location = '/'
            }
        })
    </script>
@endsection
