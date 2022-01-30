<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\correo;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class CorreoController extends Controller
{
    public function Enviar(Request $datos){
        $name = $datos->input('name');
        $email = $datos->input('email');
        $subject = $datos->input('subject');
        $message = $datos->input('message');
        $datos = array('name'=>$name, 'email'=>$email, 'subject'=>$subject, 'message'=>$message);
        Mail::to('kevinhalo005@gmail.com')->send(new correo($datos));
        return redirect('/')->with('success', 'Mensaje enviado correctamente');
    }
}


