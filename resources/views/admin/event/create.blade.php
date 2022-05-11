@extends('admin.templates.default')

@section('title', format_title_admin('Create event'))

@section('content')
    <div class="heading-section mb-4">
        <div class="heading-section__left">
            <h1 class="heading heading--1">Create event</h1>
        </div>
    </div>
    <div class="main">
        <form action="{{ route('admin.event.store') }}" class="form" method="POST">
            @csrf
            <label class="label mb-4" for="content__input">
                <span class="label__text">Name</span>
                <input class="input" name="name" type="text" id="name__input" placeholder="Name">
            </label>
            <label class="label mb-4" for="content__input">
                <span class="label__text">Slug</span>
                <input class="input" name="slug" type="text" id="slug__input" placeholder="Slug">
            </label>
            <label class="label mb-4" for="type__input">
                <span class="label__text">Type</span>
                <select class="input" name="type" id="type__input">
                    <option>-</option>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </label>
            <label class="label mb-4" for="image__input">
                <span class="label__text">Image</span>
                <input class="input" name="image" type="text" id="image__input" placeholder="Image">
            </label>
            <div class="split">
                <label class="label mb-4" for="start_date__input">
                    <span class="label__text">Start date</span>
                    <input class="input" name="start_date" type="date" id="start_date__input" placeholder="Start date">
                </label>
                <label class="label mb-4" for="end_date__input">
                    <span class="label__text">End date</span>
                    <input class="input" name="end_date" type="date" id="end_date__input" placeholder="End date">
                </label>
            </div>
            <label class="label mb-4" for="location__input">
                <span class="label__text">Location</span>
                <input class="input" name="location" type="text" id="location__input" placeholder="Location">
            </label>
            <label class="label mb-4" for="description__input">
                <span class="label__text">Short description</span>
                <textarea class="input" name="description" id="description__input" cols="30" rows="10"></textarea>
            </label>
            <label class="label mb-4" for="content__input">
                <span class="label__text">Content</span>
                <textarea class="editor" name="content" id="content__input" cols="30" rows="10"></textarea>
            </label>
            <label class="label label--horizontal mb-4">
                <div class="checkbox-wrapper mr-2">
                    <input type="checkbox" class="checkbox pseudo" name="visible" />
                    <div class="checkbox__body">
                        <svg class="checkbox__icon icon icon--white" viewBox="0 0 448 512">
                            <path d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path>
                        </svg>
                    </div>
                </div>
                Visible
            </label>
            <button class="button" type="submit">Save</button>
        </form>
    </div>
    <script>
        tinymce.init({
            selector: '.editor',
            plugins: 'advlist autolink lists link image charmap preview anchor table',
            toolbar_mode: 'floating',
        });
    </script>
@endsection
