<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonneRequest;
use App\Http\Requests\UpdatePersonneRequest;
use App\Models\Personne;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes = Personne::all();
        $page = 'personne';
        return view("backoffice.personne.all", compact("personnes", 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = 'personne';
        return view("backoffice.personne.create", 'page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonneRequest $request)
    {
        $personne = new Personne();
        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->dob = $request->dob;
        $personne->website = $request->website;
        $personne->phoneNumber = $request->phoneNumber;
        $personne->degree = $request->degree;
        $personne->email = $request->email;
        $personne->freelance = $request->freelance;
        $personne->city = $request->city;
        $personne->age = $request->age;
        $personne ->updated_at=now();
        $personne->save();
        return redirect()->route("personne"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function show(Personne $personne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personne = Personne::find($id);
        $page = 'personne';
        return view("backoffice.personne.edit",compact("personne", 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonneRequest  $request
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonneRequest $request, Personne $id)
    {
        $personne = Personne::find($id);
        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->dob = $request->dob;
        $personne->website = $request->website;
        $personne->phoneNumber = $request->phoneNumber;
        $personne->degree = $request->degree;
        $personne->email = $request->email;
        $personne->freelance = $request->freelance;
        $personne->city = $request->city;
        $personne->age = $request->age;
        $personne ->updated_at=now();
        $personne->save();
        return redirect()->route("personne");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personne = Personne::find($id);
        $personne->delete();
        return redirect()->back();
    }
}
