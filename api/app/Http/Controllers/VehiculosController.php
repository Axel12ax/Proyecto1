<?php

namespace App\Http\Controllers;
use App\Models\Vehiculo;
use App\Models\Marca;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculosController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();
       // return view("admin.vehiculo")->with("vehiculos",$vehiculos);
        $MARCA=Marca::all();
        $CATEGORIA=Category::all();
        return view('admin.vehiculo')->with('MARCA',$MARCA)->with('CATEGORIA',$CATEGORIA)->with("vehiculos", $vehiculos);
    }

    public function delete($id){
        $vehiculo=Vehiculo::find($id);
        $vehiculo->delete();
        return redirect('admin/vehiculo')->with('mensaje','Vehiculo eliminado');
    }

        public function edit(Request $request, $id){
            $vehiculo=Vehiculo::find($id);
            $vehiculo->modelo=$request->modelo;
            $vehiculo->NSerie=$request->NSerie;
            $vehiculo->color=$request->color;
            $vehiculo->año=$request->año;
            $vehiculo->precio=$request->precio;
            $vehiculo->kilometros=$request->kilometros; 
            $vehiculo->descripcion=$request->descripcion;
            $vehiculo->id_marca=$request->id_marca;
            $vehiculo->id_categoria=$request->id_categoria;
            $vehiculo->save();
            return redirect('admin/vehiculo')->with('mensaje','Vehiculo editado');
            }

    public function create(Request $request){
    /*  $validated=$request->validate([
           'Nserie'=>'required|string',
           'modelo'=>'required|string',
           'color'=>'required|string',
           'año'=>'required|integer', 
           'precio'=>'required|string',
           'kilometros'=>`required|string`,
           'descripcion'=>'required|string',
           'id_marca'=>'required|string',
           'id_categoria'=>'required|string',
        ],[
            'Nserie.required'=>'El numero de serie es requerido',
            'Nserie.min'=>'El numero de serie debe tener 17 caracteres',
            'Nserie.max'=>'El numero de serie debe tener 17 caracteres',
            'modelo.required'=>'El modelo es requerido',
            'color.required'=>'El color es requerido',
            'año.required'=>'El año es requerido',
            'año.required'=>'El año debe ser un numero',
            'precio.required'=>'El precio es requerido',
            'kilometros.required'=>'Los kilometros son requeridos',
            'descripcion.required'=>'La descripcion es requerida',
            'id_marca.required'=>'La marca es requerida',
            'id_categoria.required'=>'La categoria es requerida',
        ]
        );*/
        $img=$request->file('imagen');
        $name=time().'.'.$img->getClientOriginalExtension();
        $destino=public_path('img_V/');
        $request->imagen->move($destino,$name);

        $vehiculo=new Vehiculo();
        $vehiculo->id_user=1;
        $vehiculo->NSerie=$request->NSerie;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->color=$request->color;
        $vehiculo->año=$request->año;
        $vehiculo->precio=$request->precio;
        $vehiculo->kilometros=$request->kilometros;
        $vehiculo->descripcion=$request->descripcion;
        $vehiculo->img=$name;
        $vehiculo->id_marca=$request->id_marca;
        $vehiculo->id_categoria=$request->id_categoria;

        $vehiculo->save();
        return redirect('admin/vehiculo')->with('mensaje','Vehiculo agregado');
    }
}
