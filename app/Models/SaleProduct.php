<?php

// app/Models/SaleProduct.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cellphone;


class SaleProduct extends Model
{
    protected $fillable = ['sale_id', 'product_id', 'amount'];

    // Relacionamento com o modelo Cellphone
    public function product()
    {
        return $this->belongsTo(Cellphone::class, 'product_id');
    }
}
