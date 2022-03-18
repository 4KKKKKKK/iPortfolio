@extends('layout.app')

@section('content')


@include('partial.nav')
@include('partial.hero')

  <main id="main">
    @include('partial.about')
    @include('partial.fact')
    @include('partial.skills')
    @include('partial.resume')
    @include('partial.portfolio')
    @include('partial.service')
    @include('partial.testimonials')
    @include('partial.contact')
  </main><!-- End #main -->

@include('partial.footer')
@endsection
