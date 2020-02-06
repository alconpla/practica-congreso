<?php

namespace App\Http\Controllers;
use App\Ponencia;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ponencia = Ponencia::all();

        return view('ponencia.index')->with(['ponencia' => $ponencia]);
    }
}
