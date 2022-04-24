@extends('admin.templates.auth')

@section('title', format_title_admin('Login'))

@section('content')
    <div class="login">
        <form class="login__wrapper" action="{{ route('admin.auth.login') }}" method="POST">
            @csrf
            <img src="{{ asset('img/logo.svg') }}" class="login__logo mb-8" alt="Visma logo">
            <h1 class="heading heading--1 mb-4">Sign in</h1>
            <label class="label mb-4" for="email">
                <span class="label__text">Email</span>
                <input class="input input--secondary" name="email" type="text" placeholder="Email">
            </label>

            <label class="label mb-8" for="password">
                <span class="label__text">Password</span>
                <input class="input input--secondary" type="password" name="password" placeholder="Password">
            </label>
            <div class="login__submit">
                <label class="label label--horizontal">
                    <div class="checkbox-wrapper mr-2">
                        <input type="checkbox" class="checkbox pseudo" name="remember" />
                        <div class="checkbox__body">
                            <svg class="checkbox__icon icon icon--white" viewBox="0 0 448 512">
                                <path d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path>
                            </svg>
                        </div>
                    </div>
                    Remember me
                </label>
                <button class="button" type="submit">Sign in</button>
            </div>

        </div>
    </div>
@endsection
