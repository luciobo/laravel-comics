<body>
    @extends('layouts.app')

    @section('content')
        <div class="bg-jumbotron">

        </div>
        <section class="bg-dark">
            <div class="container py-5">
                <div class="row g-4">
                    @foreach ($fumettiArray as $elfumetti)
                        <div class="col-2">
                            <div class="card bg-dark text-light border-0 rounded-0">
                                <img src="{{ $elfumetti['thumb'] }}" class="card-img-top" alt="...">
                                <div class="card-body p-0 py-3">
                                    <h3 class="card-title">{{ $elfumetti['title'] }}</h3>
                                    <h5>Prezzo: {{ $elfumetti['price'] }}</h5>
                                    <h6>Serie: {{ $elfumetti['series'] }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="bg-primary">
            <div class="container py-5">
                <div class="row g-4 d-flex justify-content-between align-items-center">
                    @foreach ($cardInferiori as $elcardIferiori)
                        <div class="col-1 px-3">
                            <div class="d-flex align-items-center bg-primary text-light border-0 rounded-0 ">
                                <img src="{{ Vite::asset($elcardIferiori['img']) }}" class="card-img-top w-75" alt="...">
                                <h6 class="card-title px-3">{{ $elcardIferiori['title'] }}</h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection


</body>

</html>
