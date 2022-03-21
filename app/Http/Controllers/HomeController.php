<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Personne;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $skils = Skil::all();
        $services = Service::all();
        $personnes = Personne::all();
        $portofolios = Portfolio::all();
        $facts = Fact::all();
        return view('welcome', compact('skils', 'services','personnes','portofolios', 'facts'));
    }
}
