<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
       return view ('admin.home');
   }

   public function pesquisar(Request $request){
    //  $text = $request->text;
    // $eventos = evento::where('titulo','LIKE', "%{$text}%")->get();
    // return view('/app.blade.php',compact('evento').$eventos);
    var_dump($request->all());
    
   }



}
