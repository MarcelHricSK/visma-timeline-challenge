@extends('admin.templates.default')

@section('title', format_title_admin('Events'))

@section('content')
    <div class="heading-section mb-4">
        <div class="heading-section__left">
            <h1 class="heading heading--1">Events</h1>
            <span class="subheading">{{ $events->count() }} event/s</span>
        </div>
        <a href="{{ route('admin.event.create') }}" class="button button--small button--dark">Add event</a>
    </div>
    <table class="table mb-2">
        <thead class="table__head">
        <tr class="table__row table__row--head">
            <th class="table__cell table__cell--head align-center w-2"></th>
            <th class="table__cell table__cell--head">
                <div class="table__cell-content table__cell-content--head">Name</div>
            </th>
            <th class="table__cell table__cell--head w-24">
                <div
                    class="table__cell-content table__cell-content--head">Visibility
                </div>
            </th>
            <th class="table__cell table__cell--head w-12">
                <div
                    class="table__cell-content table__cell-content--head align-right"></div>
            </th>
            <th class="table__cell table__cell--head w-12">
                <div
                    class="table__cell-content table__cell-content--head align-right"></div>
            </th>
        </tr>
        </thead>
        <tbody class="table__body">
        @foreach($events as $event)
            <tr class="table__row" data-id="{{ $event->id }}">
                <td class="table__cell">
                    <div class="table__cell-content align-center">
                        <div class="checkbox-wrapper mx-center">
                            <input type="checkbox" class="checkbox pseudo" name="users" value="{{ $event->id }}"/>
                            <div class="checkbox__body">
                                <svg class="checkbox__icon icon icon--white" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="table__cell">
                    <a class="table__cell-content hover hover--underline"
                       href="{{ route('admin.event.edit', ['event' => $event->id]) }}">{{ $event->name }}</div>
                </td>
                <td class="table__cell">
                    <div class="table__cell-content">
                        @if($event->visible)
                            Yes
                        @else
                            No
                        @endif
                    </div>
                </td>
                <td class="table__cell">
                    <div class="table__cell-content align-right">
                    </div>
                </td>
                <td class="table__cell">
                    <div class="table__cell-content align-right">
                        {{ $event->created_at }}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

