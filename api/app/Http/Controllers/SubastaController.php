<?php

namespace App\Http\Controllers;
use App\Models\Subasta;
use App\Models\Puja;

use Illuminate\Http\Request;

class SubastaController extends Controller
{
    public function index()
    {
        $subastas = Subasta::with('user')->with('vehiculo')->get();
        $pujas = Puja::with('subasta')->with('user')->with('vehiculo')->get();
        return view("admin.subasta")->with("subastas",$subastas)->with("pujas",$pujas);
    }
}
