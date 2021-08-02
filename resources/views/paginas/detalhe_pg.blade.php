@extends('templates.detalhe_temp')
@section('detalhe_item')

Nome do Produto: {{$produto_detalhes->nome_produto}}
<hr color="#000000">

Codigo do Produto: {{$produto_detalhes->codigo_produto}}
<hr color="#000000">

 Preço do Produto: R$ {{$produto_detalhes->preco_produto}}
 <hr color="#000000">

 Categoria do Produto: {{$produto_detalhes->categoria_produto}}
 <hr color="#000000">

 Composição: {{$produto_detalhes->composicao_produto}}
 <hr color="#000000">

 Data: {{$produto_detalhes->data}}
 <hr color="#000000">

  Tamanho: {{$produto_detalhes->tamanho}}
  <hr color="#000000">

Quantidade: {{$produto_detalhes->quantidade_produto}}
<hr color="#000000">

  <img src="{{url('storage/'.$produto_detalhes->foto_1)}}" width="500px" height="400px"><br><br>
   <img src="{{url('storage/'.$produto_detalhes->foto_2)}}" width="500px" height="400px"><br><br>
   <img src="{{url('storage/'.$produto_detalhes->foto_3)}}" width="500px" height="400px"><br><br>
 
   <hr color="#000000">

   <form action="{{route('deletar.deletar_produto',$produto_detalhes->id)}}" method="post">
 @csrf 
 @method('DELETE')
  <input type="submit" name="up" value="Apagar">
</form>
@endsection