@extends('admin.app')
@section('content')


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Titulo</th>
      <th scope="col">DataInicio</th>
      <th scope="col">DataTerminio</th>
      <th scope="col">InscriçãoInicio</th>
      <th scope="col">InscriçãoFinal</th>
      <th scope="col">Ações</th>

    </tr>
  </thead>
  <tbody>

    @foreach ($eventos as $evento)

    <tr>

      <td>{{$evento->id}}</td>
      <td>{{$evento->titulo}}</td>

      <td>{{ date( 'd/m/Y' , strtotime($evento->dataInicio))}} </td>
      <td>{{ date( 'd/m/Y' , strtotime($evento->dataFinal))}} </td>
      <td>
        {{ date( 'd/m/Y' , strtotime($evento->inscricaoInicio))}}
      </td>
      <td>{{ date( 'd/m/Y' , strtotime($evento->inscricaoFinal))}}</td>
      <td>

        <a href="{{route('evento-editar',['id' =>$evento->id])}}"><img width="18px" src="{{asset('icones/svgs/regular/edit.svg')}}"></a>
        <span id="btn_del"><img width="14px" src="{{asset('icones/svgs/regular/trash-alt.svg')}}"></span>

       
        <div class="modal " id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header" style="background: #343a40">
                <h5 class="modal-title" id="mymodal" style="color: white">Evento</h5>


                </button>
              </div>
              <div class="modal-body">
                <span>Deseja realmente apagar este evento?</span>
              </div>
              <div class="modal-footer">
                <button type="button" id="nao" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <a class="btn btn-primary" name="ok_button" id="ok_button" href="{{route('evento-deletar',['id' =>$evento->id])}}">Sim</a>
                <!-- <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button> -->
              </div>
            </div>
          </div>
        </div>
     


        @endforeach
       
        <!-- <div id="mymodal" class="modal">
        <a id="nao"  class="btn btn-danger" >Nao</a>
        <a class="btn btn-primary" href="{{route('evento-deletar',['id' =>$evento->id])}}" >Sim</a>
        </div> -->

        <!-- Modal -->




      </td>
      <th scope="row"></th>


    </tr>

  </tbody>
</table>




<!--href="{{route('evento-deletar',['id' =>$evento->id])}}"-->




@endsection