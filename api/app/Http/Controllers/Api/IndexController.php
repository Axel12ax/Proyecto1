<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Marca;
use App\Models\Category;
use App\Models\User;
use App\Models\Subasta;
use App\Models\Puja;
use App\Models\VentaCarro;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $categorias = Category::all();
        $marcas = Marca::all();
        $user = User::all();
        $ultimos = Vehiculo::with('user')->with('marca')->orderBy('created_at','desc')->take(10)->get();
        $pujas = Puja::with('user')->with('subasta')->get();
        $subastas = Subasta::with(['user','vehiculo','vehiculo.marca','vehiculo.categoria'])->get();
        $directa= VentaCarro::with(['user','vehiculo','vehiculo.marca','vehiculo.categoria'])->get();

        return response()->json([ 
            'ultimos' => $ultimos,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'user' => $user,
            'pujas' => $pujas,
            'subasta' => $subastas,
            'venta' => $directa,
            'status'=>'success'
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
