@extends('admin.app')
@section('content')

<h1>Evento Cadastrar</h1>
<section>
<form  action="{{route('evento-salvar')}}" method="POST">
  @csrf
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
    <input name="titulo" class="form-control" id="titulo" placeholder="Digite um Titulo..." >
  </div>

  <div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea class="form-control" name="descricao" id="descricao" rows="3" ></textarea>
  </div>

  <div class="form-group">
    <label for="dataInicio">Data de Inicio:</label>
    <input type="date" name="dataInicio" class="form-control" id="dataInicio" value="{{old('datai')}}" >
  </div>

  <div class="form-group">
    <label for="dataFinal">Data de Término:</label>
    <input type="date" name="dataFinal" class="form-control" id="dataFinal"  value="{{old('dataf')}}" >
  </div>

  <div class="form-group">
    <label for="inscricaoInicio">Inicio das Inscrições:</label>
    <input type="date" name="inscricaoInicio" class="form-control" id="inscricaoInicio" >
  </div>

  <div class="form-group">
    <label for="inscricaoFinal">Témino das Inscrições:</label>
    <input name="inscricaoFinal" type="date" class="form-control" id="inscricaoFinal" >
  </div>

  
  
  
  <button type="submit" class="btn btn-primary">Salvar</button>
  
</form>
</section>


 
@endsection