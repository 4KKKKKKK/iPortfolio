<?php

namespace App\Http\Controllers;

use App\Models\Skil;
use Illuminate\Http\Request;

class SkilController extends Controller
{
    public function index(){
        $skils = Skil::all();
        $page = 'skil';
        return view("backoffice.skil.all",compact("skils", 'page'));
    }
    public function destroy($id){
        $skil = Skil::find($id);
        $skil->delete();

        return redirect()->back();
   }
    public function edit($id){
        $skil = Skil::find($id);
        $page = 'skil';
        return view("backoffice.skil.edit",compact("skil", 'page'));
    }
    public function update($id, Request $request){
        $skil = Skil::find($id);
        $skil->percentage = $request->percentage;
        $skil->language = $request->language;
        $skil ->updated_at=now();
        $skil->save();
        return redirect()->route("skil");
       }
       public function create(){
        $page = 'skil';
        return view("backoffice.skil.create", compact('page'));
    }

    public function store (Request $request)
    {
        $skil = new Skil();
        $skil->percentage = $request->percentage;
        $skil->language = $request->language;
        $skil ->updated_at=now();
        $skil->save();
        return redirect()->route("skil");

    }
}
