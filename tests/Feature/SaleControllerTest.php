<?php

// tests/Feature/SaleControllerTest.php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Sale;
use App\Models\Cellphone;

class SaleControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_new_sale()
    {
        // Adicione produtos de teste ao banco de dados
        //$cellphones = factory(Cellphone::class, 2)->create();

        $products = [
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

        foreach ($products as $productData) {
            $cellphones[] = Cellphone::create($productData);
        }
 
        // Dados simulados para a nova venda
        $data = [
            'product_ids' => [$cellphones[0]->id, $cellphones[1]->id],
            'product_qtd' => [2, 1],
        ];

        // Faça uma solicitação para a rota de criação de venda
        $response = $this->postJson('/api/sales', $data);

        // Verifique se a resposta contém o código de status correto
        $response->assertStatus(201);

        // Verifique se a venda foi criada no banco de dados
        $this->assertCount(1, Sale::all());

        
    }
}
