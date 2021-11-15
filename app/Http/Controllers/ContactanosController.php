<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }
    public function store()
    {
        $correo = new ContactanosMailable();
        Mail::to('pajv0813@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');
    }
}