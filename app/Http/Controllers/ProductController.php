<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\DB;

class ProductController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function list()
    {
        $products = DB::table('produto')->get();
        // ->select('produto.*')
        // ->orderBy('produto.id');
        return view('product/list-product', compact('products'));
    }
    public function create()
    {
        return view('product/create-product');
        // retorna uma view com campos para preencher
    }

    public function store(Request $request)
    {
        $product = new ProductModel();
        $product->codigo = $request->input('codigoProduto');
        $product->nome = $request->input('nomeProduto');
        $product->descricao = $request->input('descricaoProduto');
        $product->price = $request->input('precoProduto');
        $product->quantidade = $request->input('quantidadeProduto');
        $product->ativo = $request->input('ativo');
        $product->foto = $request->input('fotoProduto');

        $product->save();

        return redirect(route('product.list'));
        // retorna uma view de todos os produtos
    }

    public function edit($id)
    {
        $product = ProductModel::where('idproduto',$id)->first();

        if (isset($product)) {
            return view('product/edit-product', compact('product'));
        }
        return redirect(route('product.list'));
    }

    public function update(Request $request, $id)
    {
        $product = ProductModel::where('idproduto',$id)->get();
        $product->codigo = $request->input('codigoProduto') ?? $product->codigo;
        $product->nome = $request->input('nomeProduto') ?? $product->nome;
        $product->descricao = $request->input('descricaoProduto') ??  $product->descricao;
        $product->price = $request->input('precoProduto') ??  $product->price;
        $product->quantidade = $request->input('quantidadeProduto') ??  $product->quantidade;
        $product->ativo = $request->input('ativo') ??  $product->ativo;
        $product->foto =  $request->input('fotoProduto') ??  $product->foto;

        $product->save();

        return redirect(route('product.list'));
    }

    public function destroy($id)
    {
        $product = ProductModel::where('idproduto',$id);
        if (isset($product)) {
            $product->delete();
        }

        return redirect(route('product.list'));
    }
}
