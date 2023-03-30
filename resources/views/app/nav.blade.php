<nav class="navbar navbar-expand-md navbar-dark bg-light sticky-top" style="--bs-bg-opacity: 0.5;" aria-label="navbar">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ route('index') }}"><i class="bi-cart4"></i> AddToCart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars">
            <ul class="navbar-nav ms-auto">
                {{--@if(app()->getLocale() == 'en')--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{ route('language', 'tm') }}">--}}
                            {{--<img src="{{ asset('img/flag/tkm.png') }}" alt="Türkmen" style="height:1rem;">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--@else--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{ route('language', 'en') }}">--}}
                            {{--<img src="{{ asset('img/flag/eng.png') }}" alt="English" style="height:1rem;">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--@endif--}}
                <li class="nav-item">
                    <a class="nav-link link-light" href="#">
                        <i class="bi-basket-fill"></i>
                        <span class="badge text-bg-warning bg-opacity-100 align-text-bottom">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>