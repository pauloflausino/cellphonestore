<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Cellphone;
use App\Models\SaleProduct;

class SaleService
{
    public static function getSales()
    {
        $sales = Sale::all();

        if($sales->count()){
            return response()->json($sales);
        }else {
            return response()->json();
        }        
    }

    public static function getSaleWithProducts()
    {
        $sales = Sale::with('products')->get();

        if($sales->count()){
            return response()->json($sales);
        }else {
            return response()->json();
        }
    }

    public static function getSaleWithProductId($id)
    {
        $sales = Sale::with('products')->find($id);

        if (!$sales) {
            return response()->json(['message' => 'Venda não encontrada'], 404);
        }

        return response()->json($sales);
    }

    public static function saveSale($request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'product_ids' => 'required|array',
            'product_qtd' => 'required|array',
        ]);

        // Crie uma nova venda
        $sale = Sale::create([
            'amount' => 0, // O valor total será calculado abaixo
        ]);

        // Adicione os produtos à venda
        foreach ($request->input('product_ids') as $key => $productId) {
            $product = Cellphone::find($productId);

            // Se o produto existir, adicione à venda
            if ($product) {
                SaleProduct::create([
                    'sale_id' => $sale->id,
                    'product_id' => $product->id,
                    'amount' => $request->input('product_qtd')[$key],
                ]);

                // Atualize o valor total da venda
                $sale->amount += $product->price * $request->input('product_qtd')[$key];
                $sale->save();
            }
        }

        return response()->json($sale, 201);
    }

    public static function delete($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['message' => 'Venda não encontrada'], 404);
        }

        // Cancela a venda excluindo-a
        $sale->delete();

        return response()->json(['message' => 'Venda cancelada com sucesso']);
    }

    public static function addProducts($id, Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'product_ids' => 'required|array',
            'product_qtd' => 'required|array'
        ]);

        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['message' => 'Venda não encontrada'], 404);
        }

        // Adiciona os produtos à venda
        foreach ($request->input('product_ids') as $index => $productId) {
            $product = Cellphone::find($productId);

            if (!$product) {
                return response()->json(['message' => 'Produto não encontrado'], 404);
            }

            SaleProduct::create([
                'sale_id' => $sale->id,
                'product_id' => $product->id,
                'amount' => $request->input('product_qtd')[$index],
            ]);

            // Atualiza o valor total da venda
            $sale->amount += $product->price * $request->input('product_qtd')[$index];
        }

        // Salva as alterações
        $sale->save();

        return response()->json(['message' => 'Produtos adicionados à venda com sucesso']);
    }
    
}
