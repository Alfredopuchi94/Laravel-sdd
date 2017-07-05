<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Afirmador;


class TestController extends Controller
{
    // public function show()
    // {
    //   echo "Uso del controlador";
    // }

    public function show($id)
    {
      $afirmador = Afirmador::find($id);
      $afirmador->each(function ($afirmador){
        $afirmador->enlaces;
      });
      dd($afirmador);
    }
}
