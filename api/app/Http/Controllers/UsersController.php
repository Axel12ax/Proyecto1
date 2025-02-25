<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

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
}
