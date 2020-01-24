<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Evento;
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaEventos = Evento::all();
        return view('admin.eventos')->with('eventos',$listaEventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     */

   
  






    public function store(Request $request)
    {
        //
        //var_dump($request->all());
        //dd($request->request);

        //Validação

        $validacao = $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'dataInicio' =>'before:dataFinal',
            'dataFinal' =>'after:dataInicio',
            'inscricaoInicio' => 'before:dataFinal',
            'inscricaoFinal' => 'before:dataInicio',
            
        ]);

      


        $titulo = $request->titulo;
        $descricao = $request->descricao;
        $dataInicio = $request->dataInicio;
        $dataFinal = $request->dataFinal;
        $inscricaoInicio = $request->inscricaoInicio;
        $inscricaoFinal= $request->inscricaoFinal;


        $evento = new Evento();
        $evento->titulo = $titulo;
        $evento->descricao = $descricao;
        $evento->dataInicio = $dataInicio;
        $evento->dataFinal = $dataFinal;
        $evento->inscricaoInicio = $inscricaoInicio;
        $evento->inscricaoFinal = $inscricaoFinal;

        $evento->save();

        return redirect()->route('evento-listar');



   
      


    }

    //Pequisar

    public function pesquisar(){
        return view('admin.cadastrar');

    }

    public function show($id)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);
        return view('admin.evento-editar')->with('evento',$evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request)
    {
        $validacao = $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'dataInicio' =>'before:dataFinal',
            'dataFinal' =>'after:dataInicio',
            'inscricaoInicio' => 'before:dataFinal',
            'inscricaoFinal' => 'before:dataInicio',
        ]);

        

        $titulo = $request->titulo;
        $descricao = $request->descricao;
        $dataInicio = $request->dataInicio;
        $dataFinal = $request->dataFinal;
        $inscricaoInicio = $request->inscricaoInicio;
        $inscricaoFinal= $request->inscricaoFinal;


        $evento = Evento::find($request->id);
        $evento->titulo = $titulo;
        $evento->descricao = $descricao;
        $evento->dataInicio = $dataInicio;
        $evento->dataFinal = $dataFinal;
        $evento->inscricaoInicio = $inscricaoInicio;
        $evento->inscricaoFinal = $inscricaoFinal;

        $evento->save();

        return redirect()->route('evento-listar');
    }

  


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect()->route('evento-listar');

    }

   


}
