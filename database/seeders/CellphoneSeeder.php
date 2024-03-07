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
                'price' => 2000,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 3',
                'price' => 2200,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Celular 4',
                'price' => 2400,
                'description' => 'Lorenzo Ipsulum',
            ],
            [
                'name' => 'Celular 5',
                'price' => 2600,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 6',
                'price' => 2800,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Celular 7',
                'price' => 3000,
                'description' => 'Lorenzo Ipsulum',
            ],
            [
                'name' => 'Celular 8',
                'price' => 3200,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 9',
                'price' => 3400,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Celular 10',
                'price' => 3600,
                'description' => 'Lorenzo Ipsulum',
            ],
            [
                'name' => 'Celular 11',
                'price' => 3800,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 12',
                'price' => 4000,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Celular 13',
                'price' => 4200,
                'description' => 'Lorenzo Ipsulum',
            ],
            [
                'name' => 'Celular 14',
                'price' => 4400,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 15',
                'price' => 4600,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Celular 16',
                'price' => 4800,
                'description' => 'Lorenzo Ipsulum',
            ],
            [
                'name' => 'Celular 17',
                'price' => 5000,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 18',
                'price' => 5200,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Celular 19',
                'price' => 5400,
                'description' => 'Lorenzo Ipsulum',
            ],
            [
                'name' => 'Celular 20',
                'price' => 5600,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 21',
                'price' => 5800,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Celular 22',
                'price' => 6000,
                'description' => 'Lorenzo Ipsulum',
            ],
            [
                'name' => 'Celular 23',
                'price' => 6200,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 24',
                'price' => 6400,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Celular 25',
                'price' => 6600,
                'description' => 'Lorenzo Ipsulum',
            ],
            [
                'name' => 'Celular 26',
                'price' => 6800,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 27',
                'price' => 7000,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'name' => 'Celular 28',
                'price' => 7200,
                'description' => 'Lorenzo Ipsulum',
            ],
            [
                'name' => 'Celular 29',
                'price' => 7400,
                'description' => 'Lorem ipsum dolor',
            ],
            [
                'name' => 'Celular 30',
                'price' => 7600,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
            // Adicione mais celulares conforme necessário
        ];

        foreach ($cellphones as $cellphoneData) {
            Cellphone::create($cellphoneData);
        }
    }
}
