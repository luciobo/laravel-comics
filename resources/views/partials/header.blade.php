<header class="">
    <nav class="">
        <div class="bg-primary">
            <div class="container text-light d-flex justify-content-end">
                <span class="px-3">DC POWER VISA</span>
                <span class="px-3">ADDICTIONAL DC SITE</span>
            </div>
        </div>
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <img class="w-75 py-2" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <div>
                <ul class="m-0 d-flex list-unstyled ">
                    <li class="p-3">
                        <a class="text-secondary text-decoration-none fw-bolder" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="p-3">
                        <a class="text-secondary text-decoration-none fw-bolder" href="{{ route('about') }}">ABOUT</a>
                    </li>
                </ul>
            </div>
            <div>
                <input class="border-bottom border-0 border-primary text-end w-75" text-center"  placeholder="search">
            </div>
        </div>
        </div>
    </nav>
</header>
