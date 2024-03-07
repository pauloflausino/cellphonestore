<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['amount'];

    public function products()
    {
        return $this->hasMany(SaleProduct::class);
    }
}
