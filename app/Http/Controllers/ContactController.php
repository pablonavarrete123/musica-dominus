<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ], ['captcha.captcha' => 'Código Captcha inválido.']);

        //  Send mail
        Mail::send('contact_email', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'msg' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from('contacto@musicadominus.org');
            $message->to('contacto@musicadominus.org', 'Vincent')->subject('Formulaire de contact Musica Dominus');
        });




        return back()->with('info', 'Message sent');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
