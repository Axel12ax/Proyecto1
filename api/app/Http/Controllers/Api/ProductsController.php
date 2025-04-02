<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Subasta;
Use App\Models\Marca;
Use App\Models\Category;
Use App\Models\User;
use App\Models\Puja;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Vehiculo::all();
        return response()->json([
            'data' => $data,
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
        $product = Subasta::with('user','vehiculo','vehiculo.marca','vehiculo.categoria')->where('id',$id)->get()->first();
        if($product!=null){
            return response()->json([
                'data' => $product,
                'status'=>'success'
            ],200);
    }else{
        return response()->json([
            'data' => null,
            'status'=>'error'
        ],404);
    }
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
