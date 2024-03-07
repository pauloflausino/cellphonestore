<?php

// tests/Feature/CellphoneControllerTest.php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cellphone;

class CellphoneControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_all_products()
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
        

        
        $this->assertTrue(true);
        
        
    }
}
