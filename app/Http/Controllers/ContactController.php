<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contacto');
}

public function store(Request $request){
    $request->validate([
       'name'=>'required',
       'lastname'=>'required',
       'email'=>'required|email',
       'phone'=>'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
       'message'=>'required'
    ]);
    
    $body =   "<p>". $request -> name . " ". $request -> lastname . " " . $request -> email . " " . $request -> phone . " " . $request -> message . " <br>";

    /* Configuracion correo */
    $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 587,'tls'))
    ->setUsername(env('MAIL_USERNAME'))
    ->setPassword(env('MAIL_PASSWORD'));
    
    // Create the Mailer using your created Transport
    $mailer = new \Swift_Mailer($transport);

     $message = (new \Swift_Message('Formulario Contacto Musica Dominus'))
            ->setFrom([env('MAIL_USERNAME') => 'correo electronico'])
            ->setTo(['pierre.taithe@codde.cl'])
            ->setBody($body, 'text/html');
            
            $mailer->send($message);

  

  
   return redirect()->route('contacto')->with('info','mensaje enviado');
}
}

