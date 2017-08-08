<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novosGrupos = Grupo::orderBy('id', 'desc')->take(3)->get();

        return view('home')->with('novosGrupos', $novosGrupos);
    }
}
