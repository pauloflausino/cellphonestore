<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\SaleService;
use App\Models\Sale;

class SaleController extends Controller
{
    public function index()
    {
        $sales = SaleService::getSales();

        return $sales;
    }

    public function showSaleDetails()
    {
        $sales = SaleService::getSaleWithProducts();

        return $sales;
    }

    public function show($id)
    {
        $findOrNot = SaleService::getSaleWithProductId($id);

        return $findOrNot;
    }

    public function store(Request $request)
    {
        $store = SaleService::saveSale($request);

        return $store;
    }

    public function destroy($id)
    {
        $message = SaleService::delete($id);

        return $message;
    }

    public function addProducts($id, Request $request)
    {
        $message = SaleService::addProducts($id, $request);

        return $message;

    }
}
