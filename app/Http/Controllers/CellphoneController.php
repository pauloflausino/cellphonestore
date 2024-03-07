<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CellphoneService;

class CellphoneController extends Controller
{
    public function index()
    {
        $products = CellphoneService::getAll();

        return $products;
    }
    
}
