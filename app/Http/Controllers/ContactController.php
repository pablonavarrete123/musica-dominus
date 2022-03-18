<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

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
       'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
       'message'=>'required'
    ]);

         //  Send mail
         Mail::send('contact_email', array(
            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'msg' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('', 'Vincent')->subject('Formulaire de contact Musica Dominus');
        });


  

        return back()->with('info', 'mensaje enviado');
}
}

