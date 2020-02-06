<?php

namespace App\Http\Controllers;

use App\Ponencia;
use Illuminate\Http\Request;
use Auth;
class PonenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ponencia = Ponencia::all();
        return view('ponencia.index')->with(['ponencia' => $ponencia]);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ponencia  $ponencia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check()) {
            $ponencia = Ponencia::findOrFail($id);
            return view('ponencia.detail', ['ponencia' => $ponencia]);
        } else {
            return view('auth.login');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ponencia  $ponencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Ponencia $ponencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ponencia  $ponencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ponencia $ponencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ponencia  $ponencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ponencia $ponencia)
    {
        //
    }
}
