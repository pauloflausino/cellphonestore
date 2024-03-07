Objetivo
Utilizando o Laravel cria uma API rest, que resolva o seguinte cenário:

A Loja ABC LTDA, vende produtos de diferentes nichos. No momento precisamos registrar a venda de celulares.

Não vamos nos preocupar com o cadastro de produtos, porém precisamos ter uma tabela em nosso banco contendo os aparelhos celulares que vão ser vendidos, por exemplo:

[
    {
        "name": "Celular 1",
        "price": 1.800,
        "description": "Lorenzo Ipsulum"
    },
    {
        "name": "Celular 2",
        "price": 3.200,
        "description": "Lorem ipsum dolor"
    },
    {
        "name": "Celular 3",
        "price": 9.800,
        "description": "Lorem ipsum dolor sit amet"
    }
]
Uma vez que temos os produtos em nosso banco, vamos seguir com o registro de venda desses aparelhos.

Não vamos nós preucupar com informações do comprador, dados de pagamento, entrega, possibilidade de descontos.

Temos que registrar somente a venda.

Então nossa consulta vai retornar algo como:

{
  "sales_id": "202301011",
  "amount": 8200,
  "products": [
    {
      "product_id": 1,
      "nome": "Celular 1",
      "price": 1.800,
      "amount": 1
    },
    {
      "product_id": 2,
      "nome": "Celular 2",
      "price": 3.200,
      "amount": 2
    },
  ]
}
Nossa API vai ter endpoints que possibilitam

Listar produtos disponíveis
Cadastrar nova venda
Consultar vendas realizadas
Consultar uma venda específica
Cancelar uma venda
Cadastrar novas produtos a uma venda