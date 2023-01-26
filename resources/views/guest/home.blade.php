@extends('layouts.guest')
@section('content')

    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <div class="logo_laravel">

            </div>
            @guest()
            <h1 class="display-5 fw-bold">
                Benvenuto nella home
            </h1>
            @else
            <h1 class="display-5 fw-bold">
                Benvenuto nella home, {{ Auth::user()->name }}
                </h1>
                <a href="{{route('admin.dashboard')}}" class="text-warning"><i class="fa-solid fa-angles-right me-1"></i> Vai alla tua area personale</a>
            @endguest


            <p class="col-md-8 fs-4 mt-5">Come l'ape raccoglie il succo dei fiori senza danneggiarne colore e profumo,<br>così il saggio dimori nel mondo. </p>
            <h6 class="mt-5">Siddharta Gautama, Buddha</h6>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
        </div>
    </div>
@endsection
