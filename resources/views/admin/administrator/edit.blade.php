@extends('admin.templates.default')

@section('title', format_title_admin('Edit administrator'))

@section('content')
    <div class="heading-section mb-4">
        <div class="heading-section__left">
            <h1 class="heading heading--1">Edit administrator</h1>
        </div>
    </div>
    <div class="main">
        <form action="{{ route('admin.administrator.update', ['administrator' => $administrator->id]) }}" class="form mb-8"
              method="POST">
            @csrf
            @method('PUT')
            <label class="label mb-4" for="name__input">
                <span class="label__text">Name</span>
                <input class="input" name="name" type="text" id="name__input" value="{{ $administrator->name }}"
                       placeholder="Name">
            </label>
            <div class="label mb-4">
                <span class="label__text">Email</span>
                <div class="detail-card__text">{{ $administrator->email }}</div>
            </div>
            <button class="button" type="submit">Save</button>
        </form>
        <form action="{{ route('admin.administrator.change_password', ['administrator' => $administrator->id]) }}" class="form"
              method="POST">
            @csrf
            <h2 class="heading heading--2 mb-4">Change password</h2>
            <label class="label mb-4" for="old_password__input">
                <span class="label__text">Old password</span>
                <input class="input" name="old_password" type="password" id="old_password__input"
                       placeholder="Old password">
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
            <button class="button" type="submit">Change</button>
        </form>

    </div>
@endsection
