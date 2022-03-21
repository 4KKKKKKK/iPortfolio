@extends('layout.app')


@section('content')
    @include('backoffice.navback')
    <main id="main">
        <h1 class="pl-3 mt-3 border-bottom">Personnes</h1>

        <div class="container d-flex justify-content-center">
            <div class="row">
        @foreach ($personnes as $personne)

                    <div class="col mt-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $personne->nom }} {{ $personne->prenom }}</h5>
                                <p class="card-text">{{ $personne->age }} ans</p>
                                <div class="d-flex w-50 mx-auto justify-content-around">
                                    <a class="btn btn-primary btn-sm text-white" href="/personne/{{ $personne->id}}/edit">Edit</a>
                                    <form action="/personne/{{ $personne->id}}/delete" method="POST">
                                        @csrf
                                        <button class="btn btn-danger btn-sm text-white" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

        @endforeach
            </div>
        </div>
    </main>


@endsection
