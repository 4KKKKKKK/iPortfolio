<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        $page = 'service';
        return view("backoffice.service.all",compact("services", 'page'));
    }
    public function destroy($id){
        $service = Service::find($id);
        $service->delete();

        return redirect()->back();
   }
    public function edit($id){
        $service = Service::find($id);
        $page = 'service';
        return view("backoffice.service.edit",compact("service"));
    }
    public function update($id, Request $request){
        $service = Service::find($id);
        $service->logo = $request->logo;
        $service->titre = $request->titre;
        $service->texte = $request->texte;
        $service ->updated_at=now();
        $service->save();
        return redirect()->route("service");
       }
       public function create(){
        $page = 'service';
        return view("backoffice.service.create", compact('page'));
    }

    public function store (Request $request)
    {
        $service = new Service();
        $service->logo = $request->logo;
        $service->titre = $request->titre;
        $service->texte = $request->texte;
        $service ->updated_at=now();
        $service->save();
        return redirect()->route("service");

    }
}
