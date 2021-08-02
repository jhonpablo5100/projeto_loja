@extends('templates.ver_temp')

@section('ver_dados')

@foreach($ver_produtos as $ver)
 {{$ver->nome_produto}}
 <img src="{{url('storage/'.$ver->foto_1)}}" width="100px" height="50px">
  <form action="{{route('deletar.deletar_produto',$ver->id)}}" method="post">
  @csrf 
  @method('DELETE')
  <input type="submit" value="Apagar">
</form>
  <a href="{{route('detalhe.detalhe_produto',$ver->id)}}">Ver Detalhes</a>
 <hr color="#000000">


@endforeach

@endsection