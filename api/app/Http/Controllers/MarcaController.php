<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Marca;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(){
        $MARCA=Marca::all();       
        return view("admin.products")->with("Marca",$MARCA);
    }

    public function createM(Request $request){
        $marca = new Marca();
        $marca->nombre = $request->nombre;
        $marca->save();
        return redirect("admin/marca");
    }
   

    public function deleteM($id){
        $marca = Marca::find($id);
        $marca->delete();
        return redirect("admin/products")->with("mensaje","Marca eliminada");
    }


}
