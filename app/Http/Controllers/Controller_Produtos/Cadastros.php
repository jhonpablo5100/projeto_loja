<?php

namespace App\Http\Controllers\Controller_Produtos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Produto\Model_Produto;

class Cadastros extends Controller
{
	public function formulario_produtos(){

		return view('paginas.form_produtos_pg');
	}
	public function cadastrar_produtos(Request $request){
		$image_1 = $request->file('foto_1')->store('produtos');
		$image_2 = $request->file('foto_2')->store('produtos');
		$image_3 = $request->file('foto_3')->store('produtos');

		$dados = new Model_Produto;
		$dados->codigo_produto=$request->codigo_produto;
		$dados->categoria_produto=$request->categoria_produto;
		$dados->nome_produto=$request->nome_produto;
		$dados->preco_produto=$request->preco_produto;
		$dados->composicao_produto=$request->composicao_produto;
		$dados->data=$request->data;
		$dados->tamanho=$request->tamanho;
		$dados->quantidade_produto=$request->quantidade_produto;
		$dados->foto_1=$image_1;
		$dados->foto_2=$image_2;
		$dados->foto_3=$image_3;

		$dados->save();
		return view('paginas.produto_inserido_pg');
		

	}
	public function ver_registros(){
		$ver_produtos = Model_Produto::all();

		return view('paginas.ver_pg',[
			'ver_produtos'=>$ver_produtos
		]);

	}

	public function deletar_produto($id){

		$apagar_item = Model_Produto::find($id);
		$arquivo_1 = $apagar_item->foto_1;
		$arquivo_2 = $apagar_item->foto_2;
		$arquivo_3 = $apagar_item->foto_3;

		$diretorio_1 = public_path('storage/'.$arquivo_1);
		$diretorio_2 = public_path('storage/'.$arquivo_2);
		$diretorio_3 = public_path('storage/'.$arquivo_3);

		unlink($diretorio_1);
		unlink($diretorio_2);
		unlink($diretorio_3);
		$apagar_item->delete();
        return view('paginas.produto_apagado_pg');
		

		
		
	}
	public function detalhe_produto($id){

		$produto_detalhes = Model_Produto::find($id);

		return view('paginas.detalhe_pg',[
			'produto_detalhes'=>$produto_detalhes
		]);


	
	}
}
