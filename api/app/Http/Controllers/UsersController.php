<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{ 
    public function sendEmail(){
     $data['code']=rand(1000,9999);
     $to="arathfernandez569@gmail.com";
     $subject="Codigo de verificacion";
     Mail::send('mails.verification',$data,function($message) use ($to,$subject){
         $message->to($to,'mi tienda online')->subject($subject);
         $message->from('axelfernandez94533@gmail.com',"Bienvenido A mi tienda online");
     });
     echo"Se envio el email";
    } 

    public function index(){
        $users = User::all();
        return view("admin.users")->with("users",$users);
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect("admin/users")->with("mensaje","Usuario eliminado");
    }

    public function create(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect("admin/users");
    }

    public function edit(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect("admin/users")->with('mensaje','Usuario editado');
    }
}
