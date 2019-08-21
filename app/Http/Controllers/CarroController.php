<?php

namespace App\Http\Controllers;

use App;
use App\carro;
use App\dueno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros=Carro::all();
        return view('index', ['carros' => $carros]);
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
        Validator::make($request->all(), [
            'marca' => 'required|in:chevrolet,mazda,toyota',
            'nombre' => 'required',
            'placa' => 'required',
            'cedula' => 'required'
        ], [
            'marca.in' => 'Solo se permiten esas marcas',
            'cedula.required'=>'La cedula es obligatoria',
            'nombre.required'=>'El nombre es obligatorio',
            'placa.required'=>'La placa es obligatoria'
        ])->validate();

        $nuevodueno= Dueno::create([
            'nombre' =>$request['nombre'],
            'cedula' =>$request['cedula']
            ]);
        Carro::create([
            'marca' =>$request['marca'],
            'placa' =>$request['placa'],
            'iddueno' => $nuevodueno->id]);
        return back()->with('exito','El vehiculo fue registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function estadistica()

    {
        $Mazda=count(Carro::where('marca', '=', 'mazda')->get());
        $Toyota=count(Carro::where('marca', '=', 'toyota')->get());
        $Chevrolet=count(Carro::where('marca', '=', 'chevrolet')->get());
        $total=[$Toyota,$Mazda,$Chevrolet];
        $marcas=['Toyota', 'Mazda', 'Chevrolet'];
        return(view('estadistica', compact('total', 'marcas')));
    }
}
