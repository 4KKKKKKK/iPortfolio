@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit Services</h2>
        <form method="POST" action="/service/{{ $service->id }}/update">
            @csrf
            <div class="row">
              <div class="col-2">
                <h4>1</h4>
                <i class='icofont-computer'></i>
              </div>
              <div class="col-2">
                <h4>2</h4>
                <i class='icofont-chart-bar-graph'></i>
              </div>
              <div class="col-2">
                <h4>3</h4>
                <i class='icofont-earth'></i>
              </div>
              <div class="col-2">
                <h4>4</h4>
                <i class='icofont-image'></i>
              </div>
              <div class="col-2">
                <h4>5</h4>
                <i class='icofont-settings'></i>
              </div>
              <div class="col-2">
                <h4>6</h4>
                <i class='icofont-tasks-alt'></i>
              </div>
            </div>
            <label class="form-label">logo</label>
            <select name="logo" class="form-control">
              <option value="<i class='icofont-computer'></i>">1</option>
              <option value="<i class='icofont-chart-bar-graph'></i>">2</option>
              <option value="<i class='icofont-earth'></i>">3</option>
              <option value="<i class='icofont-image'></i>">4</option>
              <option value="<i class='icofont-settings'></i>">5</option>
              <option value="<i class='icofont-tasks-alt'></i>">6</option>
            </select>

            <div class="mb-3">
                <label class="form-label">titre</label>
                <input type="text" class="form-control" value="{{ $service->titre }}" name="titre">
              </div>
              <div class="mb-3">
                <label class="form-label">texte</label>
                <input type="text" class="form-control" value="{{ $service->texte }}" name="texte">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
