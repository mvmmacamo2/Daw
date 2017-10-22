<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function escola()
    {
      return view('servicos.escola');
    }
}
