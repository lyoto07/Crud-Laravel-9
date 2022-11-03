<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Product as ProductModel;
use App\Models\Sale as SaleModel;
use Illuminate\Support\Facades\DB;

class SaleController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create(){
        $products = DB:: table('produto')->get();
        return view('sale/create-sale', compact('products'));
        // retorna uma view com campos para preencher
    }
    public function list(){
        $sales = DB:: table('venda')->get();
        return view('sale/list-sale', compact('sales'));
    }

    public function store(Request $request){
        $product = new ProductModel();
        $sale = new SaleModel();
        $product->nome = $request->input('nomeProduto');
        $sale->codigo = $request->input('codigo');
        $sale->data = $request->input('data');
        $sale->total = $request->input('total');

                
        $sale->save();

        return redirect( route('sale.list') );
    }

    public function edit ($id)
    {
        $sale = SaleModel::where('idvenda',$id)->first();

        if(isset($sale)){
            return redirect( route('sale.list'));
        }
    }

    public function update(Request $request, $id)
    {
        $sale = SaleModel::where('idvenda',$id)->get();
        if(isset($sale)){
            $sale->codigo = $request->input('codigo') ?? $sale->codigo;
            $sale->data = $request->input('data') ?? $sale->nome;
            $sale->total = $request->input('total') ??  $sale->descricao;

            $sale->save();
        }

        return redirect( route('sale.list'));
    }

    public function destroy ($id)
    {
        $sale = SaleModel::find($id);
        if(isset($sale)){
            $sale->delete();
        }

        return redirect( route('sale.list'));
    }

}
