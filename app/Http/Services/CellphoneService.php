<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\Cellphone;

class CellphoneService
{
    public static function getAll()
    {
        $products = Cellphone::all();
        
        if($products->count()){
            return response()->json($products);
        }else {
            return response()->json();
        }        
    }

    public static function getProductId($id)
    {
        $product = Cellphone::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        return response()->json($product);
    }

    
}
