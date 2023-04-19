<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/travelwifi.svg') }}" alt="travelwifi" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">{{ __('text.for_you') }} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">{{ __('text.for_bussines') }}<span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">{{ __('text.store_and_coverture') }}<span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('text.language') }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('set_locale', 'es') }}">
                        <img src="{{ asset('images/spain.png') }}" alt="spain" width="40">
                        Español
                    </a>
                    <a class="dropdown-item" href="{{ url('set_locale', 'en') }}">
                        <img src="{{ asset('images/usa.png') }}" alt="usa" width="40">
                        English
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
