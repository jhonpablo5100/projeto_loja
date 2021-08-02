@extends('templates.produto_apagado_temp')

@section('pagina_apagar')
 <center> 
<p>Produto Apagado com Sucesso</p>
  <br><br>
   <a href="{{route('registros.ver_registros')}}">Ok Voltar</a>

</center>


@endsection