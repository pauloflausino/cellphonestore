<?php

namespace Database\Seeders;

// SaleSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SaleSeeder extends Seeder
{
    public function run()
    {
        $sales = [
            [
                'id' => 1,
                'amount' => 0,
            ],
            [
                'id' => 2,
                'amount' => 0,
            ],
            [
                'id' => 3,
                'amount' => 0,
            ],
            // Adicione mais vendas conforme necessário
        ];

        foreach ($sales as $saleData) {
            Sale::create($saleData);
        }
    }
}
