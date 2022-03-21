@extends('layout.app')


@section('content')
    @include('backoffice.navback')
    <main id="main">
        <h1 class="pl-3 mt-3 border-bottom">services</h1>
        <div class="w-100 d-flex justify-content-center">
            <a class="btn btn-success ml-5 mt-4" href="/service/create">Create</a>
        </div>
        <div class="container">
            <div class="row">
        @foreach ($services as $service)

                    <div class="col mt-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body icon-box " data-aos="fade-up">
                                <div class="icon">{!! $service->logo !!}</div>
                                <h2 class="card-subtitle mb-2 text-muted">{{ $service->titre }}</h2>
                                <p class="card-text" >{{ $service->texte }}</p>
                                <div class="d-flex w-50 mx-auto justify-content-around">
                                    <a class="btn btn-primary btn-sm text-white" href="/service/{{ $service->id}}/edit">Edit</a>
                                    <form action="/service/{{ $service->id}}/delete" method="POST">
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
