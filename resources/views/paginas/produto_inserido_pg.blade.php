@extends('templates.produto_inserido_temp')

@section('inserir_pg')
  <center>

  <p>Produto Inserido Com Sucesso</p>
  <br><br>
    <a href="{{route('formulario.formulario_produtos')}}">Ok Voltar</a>

</center>

@endsection