@extends('admin.templates.default')

@section('title', format_title_admin('Edit medium'))

@section('content')
    <div class="content__wrapper">
      <form class="form content-divide" action="{{ route('admin.media.update', ['medium' => $medium->id]) }}"
            method="POST">
        <div class="main">
          @csrf
          @method('PUT')
          <div class="flex">
            <div class="image-view mb-8">
              <img class="image-view__img"  loading="lazy" src="{{ asset('storage/media/' . $medium->url) }}"
                   alt="{{ $medium->description }}"/>
            </div>
            <label class="label mb-4" for="title"><span
                class="label__text">Title</span>
              <input class="input" type="text" name="title"
                     placeholder="Title"
                     id="title" value="{{ $medium->title }}"/>
            </label>
            <label class="label mb-4" for="description"><span
                class="label__text">Description</span>
              <input class="input" type="text" name="description"
                     placeholder="Description"
                     id="description" value="{{ $medium->description }}"/>
            </label>
            <button disabled class="button button--primary" type="submit">Save</button>
          </div>
        </div>
        <div class="side">
          <div class="detail-card">
            {{--<div
              class="detail-card__title heading heading--3 mb-1">Naposledy aktívny
            </div>--}}
            <div class="detail-card__body mb-4">
              <div class="label mb-4">
                <span class="label__text">Link</span>
                <a href="{{ asset('storage/media/' . $medium->url) }}"
                  class="detail-card__text hover hover--underline">{{ $medium->url }}</a>
              </div>
              <div class="label">
                <span class="label__text">Created at</span>
                <div
                  class="detail-card__text">{{ $medium->created_at->format('d.m.Y H:i') }}</div>
              </div>
            </div>
            <form action="{{ route("admin.media.destroy", ['medium' => $medium->id]) }}" method="POST">
              @method('DELETE')
              <button class="button button--error"
                 type="submit">Delete</button>
            </form>
          </div>
        </div>
      </form>
    </div>
@endsection
