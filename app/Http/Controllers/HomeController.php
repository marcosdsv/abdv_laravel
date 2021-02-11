<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function contatos()
    {
        return view('contato');
    }

    public function emailContato(Request $request)
    {
        //var_dump($request->all());
        //die();
        //email responsável por enviar os emails.
        $recipient = 'teste@email.com';
        //estanciando a classe Email da pasta mail.
        Mail::to([$recipient])->send(new Email());
    }
}
