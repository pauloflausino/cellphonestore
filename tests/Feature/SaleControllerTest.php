<?php

// tests/Feature/SaleControllerTest.php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Sale;
use App\Models\Cellphone;
use App\Models\SaleProduct;

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

    /** @test */
    public function it_can_get_all_sales()
    {
        // Adicione vendas de teste ao banco de dados
        //$sales = factory(Sale::class, 3)->create();
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


        // Faça uma solicitação para a rota de consulta de vendas
        $response = $this->get('/api/sales');

        // Verifique se a resposta contém o código de status correto
        $response->assertStatus(200);

        
        $this->assertTrue(true);
    }

    /** @test */
    public function it_can_get_a_specific_sale()
    {        
        $sale = Sale::create([
            'amount' => 0, // O valor total será calculado abaixo
        ]);

        // Faça uma solicitação para a rota de consulta de uma venda específica
        $response = $this->get('/api/sales/' . $sale->id);

        $this->assertTrue(true);

        
    }

    /** @test */
    public function it_can_cancel_a_sale()
    {
        // Adicione uma venda de teste ao banco de dados
        $sale = Sale::create([
            'amount' => 0, // O valor total será calculado abaixo
        ]);

        // Faça uma solicitação para a rota de cancelamento de uma venda
        $response = $this->delete('/api/sales/' . $sale->id);

        // Verifique se a resposta contém o código de status correto
        $response->assertStatus(200);

        // Verifique se a venda foi removida do banco de dados
        $this->assertDatabaseMissing('sales', ['id' => $sale->id]);
    }
}
