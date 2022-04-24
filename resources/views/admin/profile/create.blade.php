@extends('admin.templates.default')

@section('title', format_title_admin('Create event'))

@section('content')
    <div class="heading-section mb-4">
        <div class="heading-section__left">
            <h1 class="heading heading--1">Create event</h1>
        </div>
    </div>
    <div class="main">
        <form action="{{ route('admin.profile.store') }}" class="form" method="POST">
            @csrf
            <div class="split">
                <label class="label mb-4" for="first_name__input">
                    <span class="label__text">First name</span>
                    <input class="input" name="first_name" type="text" id="first_name__input" placeholder="First name">
                </label>
                <label class="label mb-4" for="last_name__input">
                    <span class="label__text">Last name</span>
                    <input class="input" name="last_name" type="text" id="last_name__input" placeholder="Last name">
                </label>
            </div>
            <label class="label mb-4" for="role__input">
                <span class="label__text">Role</span>
                <input class="input" name="role" type="text" id="role__input" placeholder="Role">
            </label>
            <div class="split">
                <label class="label mb-4" for="started_at__input">
                    <span class="label__text">Started at</span>
                    <input class="input" name="started_at" type="date" id="started_at__input" placeholder="Started at">
                </label>
            </div>
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
            <h2 class="heading heading--2 mb-4">Links</h2>
            <label class="label mb-4" for="github_link__input">
                <span class="label__text">GitHub</span>
                <input class="input" name="github_link" type="text" id="github_link__input" placeholder="GitHub">
            </label>
            <label class="label mb-4" for="instagram_link__input">
                <span class="label__text">Instagram</span>
                <input class="input" name="github_link" type="text" id="instagram_link__input" placeholder="Instagram">
            </label>
            <button class="button" type="submit">Save</button>
        </form>
    </div>
@endsection
