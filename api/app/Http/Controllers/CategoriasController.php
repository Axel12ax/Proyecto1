<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Marca;
use App\Models\img;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(){
        $CATEGORIA=Category::all();
        $MARCA=Marca::all();
            
        return view("admin.products")->with("categorias",$CATEGORIA)->with("Marca",$MARCA);
    }
}
