<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <title>Document</title>
  <style >
  .esconder{
    display:none;
  }
  .modal{
    /* background: black;
    width:50%;
    height:50%;
    position: absolute;
    top:150px;
    left:150px; */
    color:red;

  }
  .mostrar{
display:block;


  }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">SisEven</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Evento
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="{{route('evento-novo')}}">Cadastrar Eventos</a>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('evento-listar')}}">Listar Eventos</a>
          
          
         
         
        </div>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0" >
      {{ csrf_field() }}
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquise..." aria-label="Search" name="pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
    </form>
  </div>
</nav>

<section class="container" style="margin-top:50px">

	@yield('content')


</section>

<script src="{{ asset('js/app.js') }}"></script>
<script src="jquery.js" ></script>

<script>



window.addEventListener("load", function(event) {
   
    $(document).ready(function(){
  $("#btn_del").on("click", function(){
    $("#mymodal").addClass("mostrar")
  })
  $("#nao").on("click", function(){
    $("#mymodal").removeClass("mostrar")
  })
})
  });


  var user_id;

$(document).on('click', '.delete', function(){
 user_id = $(this).attr('id');
 $('#mymodal').modal('show');
});

$('#ok_button').click(function(){
 $.ajax({
  url:"evento-deletar"+user_id,
  beforeSend:function(){
   $('#ok_button').text('Deleting...');
  },
  success:function(data)
  {
   setTimeout(function(){
    $('#mymodal').modal('hide');
    $('#user_table').DataTable().ajax.reload();
   }, 20000);
  }
 })
});



</script>
</body>

</html>