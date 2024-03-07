<?php

namespace Database\Seeders;

// CellphoneSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Cellphone;

class CellphoneSeeder extends Seeder
{
    public function run()
    {
        $cellphones = [
            [
                'name' => 'Celular 1',
                'price' => 1800,
                'description' => 'Lorenzo Ipsulum',
            ],
            [
                'name' => 'Celular 2',
                'price' => 3200,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 3',
                'price' => 9800,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            // Adicione mais celulares conforme necessário
        ];

        foreach ($cellphones as $cellphoneData) {
            Cellphone::create($cellphoneData);
        }
    }
}
