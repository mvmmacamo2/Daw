<?php

namespace App\Http\Controllers;
use App\Evento;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('/eventos.index', compact('eventos'));
    }
}
