@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit personne</h2>
        <form method="POST" action="/personne/{{ $personne->id }}/update">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control" value="{{ $personne->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">prenom</label>
                <input type="text" class="form-control" value="{{ $personne->prenom }}" name="prenom">
              </div>
              <div class="mb-3">
                <label class="form-label">dob</label>
                <input type="date" class="form-control" value="{{ $personne->dob }}" name="dob">
              </div>
              <div class="mb-3">
                <label class="form-label">website</label>
                <input type="text" class="form-control" value="{{ $personne->website }}" name="website">
              </div>
              <div class="mb-3">
                <label class="form-label">phoneNumber</label>
                <input type="text" class="form-control" value="{{ $personne->phoneNumber }}" name="phoneNumber">
              </div>
              <div class="mb-3">
                <label class="form-label">degree</label>
                <input type="text" class="form-control" value="{{ $personne->degree }}" name="degree">
              </div>
              <div class="mb-3">
                <label class="form-label">email</label>
                <input type="text" class="form-control" value="{{ $personne->email }}" name="email">
              </div>
              <div class="mb-3">
                <label class="form-label">freelance</label>
                <input type="text" class="form-control" value="{{ $personne->freelance }}" name="freelance">
              </div>
              <div class="mb-3">
                <label class="form-label">city</label>
                <input type="text" class="form-control" value="{{ $personne->city }}" name="city">
              </div>
              <div class="mb-3">
                <label class="form-label">age</label>
                <input type="number" class="form-control" value="{{ $personne->age }}" name="age">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
