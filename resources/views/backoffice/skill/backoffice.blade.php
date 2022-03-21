@extends('layout.app')

@section('content')
@include('backoffice.navback')
<main id="main">
      <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
            <div class="hero-container" data-aos="fade-in">
            <h1>Welcome to your Backoffice</h1>
            <p>Edit <span class="typed" data-typed-items="Facts, Personnes, Portfolio, Services, skills"></span></p>
            </div>
        </section><!-- End Hero -->
</main>
@endsection
