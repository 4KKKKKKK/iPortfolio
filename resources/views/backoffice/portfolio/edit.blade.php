@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit portofolios</h2>
        <form method="POST" action="/portofolio/{{ $portofolio->id }}/update">
            @csrf
            <select class="form-select form-control w-50" aria-label="Default select example" name="image">
              <option selected>Choisissez une image</option>
              <option value="/img/portfolio/portfolio-1.jpg">Image 1</option>
              <option value="/img/portfolio/portfolio-2.jpg">Image 2</option>
              <option value="/img/portfolio/portfolio-3.jpg">Image 3</option>
              <option value="/img/portfolio/portfolio-4.jpg">Image 4</option>
              <option value="/img/portfolio/portfolio-5.jpg">Image 5</option>
              <option value="/img/portfolio/portfolio-6.jpg">Image 6</option>
              <option value="/img/portfolio/portfolio-7.jpg">Image 7</option>
              <option value="/img/portfolio/portfolio-8.jpg">Image 8</option>
              <option value="/img/portfolio/portfolio-9.jpg">Image 9</option>
            </select>

            <select class="mt-2 form-select form-control w-50" aria-label="Default select example" name="categorie">
              <option selected>Choisissez une Catégorie</option>
              <option value="filter-app">App</option>
              <option value="filter-web">Web</option>
              <option value="filter-card">Card</option>
            </select>
                <div class="row">
                  <div class="col-4">
                    <h4>Image 1 </h4>
                    <img src="/img/portfolio/portfolio-1.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="col-4">
                    <h4>Image 2 </h4>
                    <img src="/img/portfolio/portfolio-2.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="col-4">
                    <h4>Image 3 </h4>
                    <img src="/img/portfolio/portfolio-3.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="col-4">
                    <h4>Image 4 </h4>
                    <img src="/img/portfolio/portfolio-4.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="col-4">
                    <h4>Image 5 </h4>
                    <img src="/img/portfolio/portfolio-5.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="col-4">
                    <h4>Image 6 </h4>
                    <img src="/img/portfolio/portfolio-6.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="col-4">
                    <h4>Image 7 </h4>
                    <img src="/img/portfolio/portfolio-7.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="col-4">
                    <h4>Image 8 </h4>
                    <img src="/img/portfolio/portfolio-8.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="col-4">
                    <h4>Image 9 </h4>
                    <img src="/img/portfolio/portfolio-9.jpg" alt="" class="img-fluid">
                  </div>
                </div>
            <button type="submit" class="mt-5 btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
