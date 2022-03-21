<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function index(){
        $portfolios = portfolio::all();
        $page = 'portfolio';
        return view("backoffice.portfolio.all",compact("portfolios", 'page'));
    }
    public function destroy($id){
        $portfolio = portfolio::find($id);
        $portfolio->delete();

        return redirect()->back();
   }
    public function edit($id){
        $portfolio = portfolio::find($id);
        $page = 'portfolio';
        return view("backoffice.portfolio.edit",compact("portfolio", 'page'));
    }
    public function update($id, Request $request){
        $portfolio = portfolio::find($id);
        $portfolio->image = $request->image;
        $portfolio->categorie = $request->categorie;
        $portfolio ->updated_at=now();
        $portfolio->save();
        return redirect()->route("portfolio");
       }
       public function create(){
        $page = 'portfolio';
        return view("backoffice.portfolio.create", compact('page'));
    }

    public function store(Request $request)
    {
        $portfolio = new portfolio();
        $portfolio->image = $request->image;
        $portfolio->categorie = $request->categorie;
        $portfolio ->updated_at=now();
        $portfolio->save();
        return redirect()->route("portfolio");

    }

}
