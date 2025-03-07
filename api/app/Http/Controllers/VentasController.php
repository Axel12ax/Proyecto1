<?php

namespace App\Http\Controllers;
use App\Models\Venta;


use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        return view("admin.venta")->with("ventas",$ventas);
    }
}
