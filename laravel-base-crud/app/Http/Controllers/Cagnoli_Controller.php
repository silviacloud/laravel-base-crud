<?php

namespace App\Http\Controllers;

use App\Cagnoli;
use Illuminate\Http\Request;

class Cagnoli_Controller extends Controller
{
    public function Index(){

      $cagnolini = Cagnoli::all();

      return view('home', compact('cagnolini'));

    }

    public function show($id){

      $cagno = Cagnoli::findOrFail($id);

      return view('cagnolo', compact('cagno'));
    }

}
