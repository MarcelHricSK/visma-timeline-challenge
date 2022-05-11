@extends('admin.templates.default')

@section('title', format_title_admin('Create administrator'))

@section('content')
    <div class="heading-section mb-4">
        <div class="heading-section__left">
            <h1 class="heading heading--1">Create administrator</h1>
        </div>
    </div>
    <div class="main">
        <form action="{{ route('admin.administrator.store') }}" class="form mb-8"
              method="POST">
            @csrf
            <label class="label mb-4" for="name__input">
                <span class="label__text">Name</span>
                <input class="input" name="name" type="text" id="name__input"
                       placeholder="Name">
            </label>
            <label class="label mb-4" for="email__input">
                <span class="label__text">Email</span>
                <input class="input" name="email" type="text" id="email__input"
                       placeholder="Email">
            </label>
            <div class="split">
                <label class="label mb-4" for="password__input">
                    <span class="label__text">Password</span>
                    <input class="input" name="password" type="password" id="password__input"
                           placeholder="Password">
                </label>
                <label class="label mb-4" for="repeat_password__input">
                    <span class="label__text">Repeat password</span>
                    <input class="input" name="repeat_password" type="password" id="repeat_password__input"
                           placeholder="Repeat password">
                </label>
            </div>
            <button class="button" type="submit">Save</button>
        </form>

    </div>
@endsection
