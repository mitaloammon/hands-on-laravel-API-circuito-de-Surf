# Circuito Mundial de Surf (Laravel 10.8, MySQL 8.0.31)

##### O Projeto Contém :

-   **_Laravel Framework_**
-   **_Postman API_** 

### Desafio Horizon

Este é um desafio proposto pela empresa Horizon para o desenvolvimento de uma API que determina o vencedor de cada bateria em um circuito de surfe. A API calcula o vencedor com base na média aritmética das três notas de cada surfista em uma determinada bateria.

### Funcionalidades

_A API oferece as seguintes funcionalidades:_

-   Cadastro de surfistas: permite cadastrar informações sobre os surfistas, como nome e país de origem.
-   Criação de baterias: permite criar baterias de surfe, associando os surfistas que irão competir em cada uma.
-   Registro das ondas: permite registrar cada onda por dois surfistas em uma bateria registrada.
-   Registro de notas: possibilita registrar as notas recebidas pelos surfistas em cada bateria.
-   Cálculo do vencedor: realiza o cálculo da média aritmética das notas de cada surfista em uma bateria e determina o vencedor com base nesse cálculo.

### Endpoints

_A API possui os seguintes endpoints:_

```POST /surfistas: cadastra um novo surfista no sistema. Os parâmetros necessários são enviados no corpo da requisição em formato JSON.
GET /surfistas: retorna a lista de todos os surfistas cadastrados.
POST /surfistas: cadastra um novo surfista. Os surfistas participantes são enviados no corpo da requisição em formato JSON.
POST /baterias: cadastra uma nova bateria. As baterias cadastradas são enviadas no corpo da requisição em formato JSON. 
GET /baterias: retorna a lista de todas as baterias criadas.
POST /ondas: cadastra uma nova onda para cada surfista e bateria de acordo com sua chave estrangeira. As ondas são enviadas no corpo da requisição em formato JSON.
GET /ondas: retorna as ondas registradas.
POST /notas: cadastra cada nova nota por surfista dentro de uma bateria de acordo com sua chave primária. As notas são enviadas no corpo da requisição em formato JSON.
GET /notas: retorna as notas registradas.
GET /baterias/vencedor/{id}: retorna os surfistas vencedores registrados de acordo com sua pontuação em cada bateria.
```
<br>
<div align="center">
<img src = "https://github.com/mitaloammon/desafioCircuitoDeSurf/assets/92004593/d330ad14-e477-402f-8213-ad90e09a3f41" width="700px" />
</div>

### Ambiente de Desenvolvimento

1. Criação do Projeto

```
$ composer install
```

2. Crie e adapte o arquivo .env com base no exemplo

```
$ cd .env.example .env
```

3. Crie seu esquema de banco de dados

```
CREATE DATABASE circuito_de_surf
```

4. Execute as migrations para criar as tabelas

```
`$ php artisan migrate --seed`
```

6. Em outra janela de Terminal Execute o seguinte comando para dar início ao servidor

```
$ php artisan serve
```

7. Vá para `http://localhost:8000` e veja em ação.

## Licença

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT).
