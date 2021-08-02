@extends('templates.form_produtos_temp')
@section('form_sistema')
 <a href="{{route('registros.ver_registros')}}">Ver Produtos cadastrados</a>

<br>
<br>
<center>
<form name="form" action="{{route('cadastrar.cadastrar_produtos')}}" method="post" enctype="multipart/form-data">
 @csrf 
 Codigo do Produto: <input type="text" name="codigo_produto"><br><br>
  Categoria do Produto: <input type="text" name="categoria_produto"><br><br>
  Nome do Produto: <input type="text" name="nome_produto"><br><br>
  Preço do Produto: <input type="text" name="preco_produto"><br><br>
  Composição do Produto: <input type="text" name="composicao_produto"><br><br>
   Data: <input type="text" name="data"><br><br>
   Tamanho: <input type="text" name="tamanho"><br><br>
   Quantidade do Produto: <input type="text" name="quantidade_produto"><br><br>

  <input type="file" name="foto_1"><br><br>
  <input type="file" name="foto_2"><br><br>
  <input type="file" name="foto_3"><br><br>

 <input type="submit" name="up" value="Cadastrar">

</form>
</center>
@endsection
