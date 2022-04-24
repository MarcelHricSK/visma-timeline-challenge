<header class="header">
    <div class="header__wrapper">
        <div class="header__logo">
            <img src="{{ asset('img/logo.svg') }}" alt="">
        </div>
        <div class="header__links">
            <a href="{{ route('client.index') }}">Timeline</a>
            <a href="{{ route('client.index') }}">Auto</a>
        </div>
        <div class="header__cta">
            <a href="{{ route('client.index') }}" class="button">Apply now</a>
        </div>
    </div>
</header>
