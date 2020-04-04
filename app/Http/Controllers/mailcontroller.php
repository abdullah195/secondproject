<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailcontroller extends Controller
{

    public function index(){


        return view('form');

    }


    public function store(){

        request()->validate(['email' => 'required|email']);

        Mail::raw('Yes it works',function ($message)
        {
            $message->to(\request('email'))->subject("Helo There");


        });

       return redirect('/form')
           ->with('message','Email Send');

    }



}
