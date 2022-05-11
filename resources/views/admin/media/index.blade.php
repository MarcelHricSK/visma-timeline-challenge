@extends('admin.templates.default')

@section('title', format_title_admin('Media'))

@section('content')
    <div class="heading-section mb-4">
        <div class="heading-section__left">
            <h1 class="heading heading--1">Media</h1>
            <span class="subheading">{{ $media->count() }} media file/s</span>
        </div>
        <a href="{{ route('admin.media.create') }}" class="button button--small button--dark">Add media</a>
    </div>
    <div class="main">
        <div class="media mb-1">
            <div class="media__wrapper">
                @foreach($media as $medium)
                    <div class="medium">
                        <div class="medium__overlay">
                            <a href="{{ route('admin.media.edit', ['medium' => $medium->id]) }}"
                               class="medium__button">
                                <svg class="ico ico--white w-1" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 576 511.9">
                                    <path
                                        d="M402.6,83.2l90.2,90.2a9.78,9.78,0,0,1,0,13.8L274.4,405.6l-92.8,10.3a19.45,19.45,0,0,1-21.5-21.5l10.3-92.8L388.8,83.2a9.78,9.78,0,0,1,13.8,0Zm162-22.9L515.8,11.5a39.11,39.11,0,0,0-55.2,0L425.2,46.9a9.78,9.78,0,0,0,0,13.8l90.2,90.2a9.78,9.78,0,0,0,13.8,0l35.4-35.4A39.11,39.11,0,0,0,564.6,60.3ZM384,346.2V448H64V128H293.8a12.3,12.3,0,0,0,8.5-3.5l40-40A12,12,0,0,0,333.8,64H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V306.2a12,12,0,0,0-20.5-8.5l-40,40A12.3,12.3,0,0,0,384,346.2Z"
                                        transform="translate(0 -0.1)"/>
                                </svg>
                            </a>
                        </div>
                        <img class="medium__item" src="{{ asset('storage/media/'. $medium->url) }}"
                             alt="{{ $medium->alt }}" title="{{ $medium->title }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
