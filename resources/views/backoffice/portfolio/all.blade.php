@extends('layout.app')


@section('content')
    @include('backoffice.navback')
    <main id="main">
        <h1 class="pl-3 mt-3 border-bottom">Portfolio</h1>
        <div class="w-100 d-flex justify-content-center">
            <a class="btn btn-success ml-5 mt-4" href="/portofolio/create">Create</a>
        </div>
        <div class="container">
            <div class="row">
        @foreach ($portofolios as $portofolio)

                    <div class="col mt-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body icon-box " data-aos="fade-up">
                                <img class="img-fluid" src={{ $portofolio->image }} alt="">
                                <h2 class="card-subtitle mb-2 text-muted">{{ $portofolio->titre }}</h2>
                                <p class="card-text" >{{ $portofolio->categorie }}</p>
                                <div class="d-flex w-50 mx-auto justify-content-around">
                                    <a class="btn btn-primary btn-sm text-white" href="/portofolio/{{ $portofolio->id}}/edit">Edit</a>
                                    <form action="/portofolio/{{ $portofolio->id}}/delete" method="POST">
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
