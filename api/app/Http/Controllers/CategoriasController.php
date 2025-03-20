<?php

namespace App\Http\Controllers;
use App\Models\Category;



use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(){
        $CATEGORIA=Category::all();
            
        return view("admin.products")->with("categorias",$CATEGORIA);
    }

   public function createC(Request $request){
        $categoria = new Category();
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return redirect("admin/products");
    }

    public function deleteC($id){
        $categoria = Category::find($id);
        $categoria->delete();
        return redirect("admin/products")->with("mensaje","Categoria eliminada");
    }

    
 
   
}
