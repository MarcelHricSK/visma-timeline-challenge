@extends('client.templates.default')

@section('title', format_title_client('Explore Visma\'s stories'))

@section('has_menu', 1)

@section('content')
    <div class="content">
        <div class="timeline">
            <ul class="timeline__years">
                @for($i = $maxYear; $i >= $minYear; $i--)
                    <li class="timeline__year{{ $i === $maxYear ? ' timeline__year--active' : null }}"
                        data-a-year="{{ $i }}">{{ $i }}</li>

                @endfor
            </ul>
            <div class="timeline__cards">
                <div class="left">
                    <div class="timeline__separator timeline__separator--rev"></div>
                    @foreach($events as $i => $event)
                        @if($i % 2 == 0)
                            <div class="timeline__card-wrapper">
                                <div data-href="{{ route('client.event', ['event' => $event->slug]) }}"
                                     class="timeline__card{{ $i % 2 ? ' timeline__card--alt' : null }}"
                                     data-year="{{ $event->start_date->format('Y') }}">
                                    <img class="timeline__img mb-2"
                                         src="{{ $event->cover_image ?: asset('img/bg.png') }}"
                                         alt="">
                                    <h2 class="timeline__heading heading heading--2">{{ $event->name }}</h2>
                                    <span class="timeline__sub mb-2">{{$event->type->name }}, {{ $event->start_date->format('Y') }}{{ $event->location ? ', ' . $event->location : null }}</span>
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
                                     class="timeline__card{{ $i % 2 ? ' timeline__card--alt' : null }}"
                                     data-year="{{ $event->start_date->format('Y') }}">
                                    <img class="timeline__img mb-2"
                                         src="{{ $event->cover_image ?: asset('img/bg.png') }}"
                                         alt="">
                                    <h2 class="timeline__heading heading heading--2">{{ $event->name }}</h2>
                                    <span class="timeline__sub mb-2">{{ $event->type->name }}, {{ $event->start_date->format('Y') }}{{ $event->location ? ', ' . $event->location : null }}</span>
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
        function getYearsInViewport() {
            let activeYears = []
            $('[data-year]').each((e, el) => {
                if ($(el).offset().top > 0 - ($(el).height() / 2) && $(el).offset().top < window.innerHeight + 100) {
                    if (!activeYears.includes($(el).attr('data-year'))) {
                        activeYears.push($(el).attr('data-year'))
                    }
                }
            })

            $('.timeline__year--active').removeClass('timeline__year--active')
            for (let i = Math.min(...activeYears); i <= Math.max(...activeYears); i++) {
                if (!$('[data-a-year=' + i + ']').hasClass('timeline__year--active')) {
                    $('[data-a-year=' + i + ']').addClass('timeline__year--active')
                }

            }
        }

        getYearsInViewport()

        $('.timeline__cards').scroll(getYearsInViewport)
        $('.timeline__year').click(function (e) {
            $('.timeline__cards').animate({
                scrollTop: $('[data-year=' + $(e.target).attr('data-a-year') + ']').offset().top
            }, 500);
        })
    </script>
@endsection
