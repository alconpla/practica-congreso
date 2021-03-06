<?php

namespace App\Http\Controllers;

use App\Ponencia;
use App\Pago;
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
        return view('ponencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['iduser'] = Auth::id();
        
        Ponencia::create($input);
        
        return redirect()->route('ponencia.index');
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
            $pago = Pago::where('iduser', Auth::id())->first();
            return view('ponencia.detail', ['ponencia' => $ponencia, 'pago' => $pago]);
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
