@extends('admin.app')
@section('content')

<h1>Evento editar</h1>
<section>
<form  action="{{route('evento-atualizar')}}" method="POST">
  @csrf
  <input name="id"  class="btn btn-primary" type="hidden" value="{{$evento->id}}">
  <div class="form-group">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <label for="titulo">Titulo:</label>
    <input name="titulo" value="{{$evento->titulo}}" class="form-control" id="titulo" placeholder="Digite um Titulo...">
  </div>

  <div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea class="form-control" name="descricao" id="descricao" rows="3" >{{$evento->descricao}}</textarea>
  </div>

  <div class="form-group">
    <label for="dataInicio">Data de Inicio:</label>
    <input type="date" name="dataInicio" class="form-control" id="dataInicio" value="{{$evento->dataInicio}}">
  </div>

  <div class="form-group">
    <label for="dataFinal">Data de Término:</label>
    <input type="date" name="dataFinal" class="form-control" id="dataFinal"  value="{{$evento->dataFinal}}" >
  </div>

  <div class="form-group">
    <label for="inscricaoInicio">Inicio das Inscrições:</label>
    <input type="date" name="inscricaoInicio" class="form-control" id="inscricaoInicio" value="{{$evento->inscricaoInicio}}">
  </div>

  <div class="form-group">
    <label for="inscricaoFinal">Témino das Inscrições:</label>
    <input name="inscricaoFinal" type="date" class="form-control" id="inscricaoFinal" value="{{$evento->inscricaoFinal}}">
  </div>

  
  
  
  <button type="submit" class="btn btn-primary">Salvar</button>
  
</form>
</section>

@endsection