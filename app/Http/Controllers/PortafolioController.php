<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    //
    public function index()
    {
        $proyectos = Proyecto::paginate();
        // dd($proyectos);
        return view("welcome",compact('proyectos'));
    }
}
