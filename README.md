<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Definição do Projeto

Esse é um projeto de uma locadora criado para que eu possa colocar em prática meus estudos do framework Laravel e também de JavaScript. O projeto em si é um sistema de uma locadora, que contém dois tipos de usuários diferentes: o admin, que quando logado possui acesso a uma área de telas que o permite visualizar, criar, alterar, e deletar filmes, gêneros e funcionários da fictícia locadora, bem como visualizar estatísticas sobre o também fictício negócio, como um gráfico mês a mês dos lucros dos alugueis de filmes por ano, ao lado de dados mais detalhados sobre seus lucros, descontando impostos e o salário dos funcionários em determinado mês. No segundo tipo de usuário, o locatário, são dois os mecanismos principais: o de locação e o de devolução de filmes (incluindo um sistema de devolução automática de filmes quando a data de validade do aluguel vencer), ambos autoexplicativos. Na área do locatário também se tem um sistema dinâmico de pesquisa de filmes feito com Javascript, que elimina todos os filmes que não contêm em seu título os caracteres digitados pelo usuário na barras e pesquisa. 
### Tecnologias Utilizadas

- **Html**
- **CSS**
- **Javascript**
- **Laravel**
- **Laravel Breeze**

## Instalação

Clone o repositório

    git clone git@github.com:guilherme-tiossi/locadora_laravel.git

Entre na pasta do repositório

    cd locadora_laravel

Instalação das dependências a partir do composer

    composer install

Inicie as migrations do banco de dados (não esquecer de criar o banco de dados de acordo com o arquivo .env)

    php artisan migrate

Inicialize o servidor de desenvolvimento

    php artisan serve

É possível accessar o servidor pela porta http://localhost:8000

## Layouts

Lorem Ipsum Dor Els Solem.

## Diagrama de Dados

![diagrama-de-dados](https://images2.imgbox.com/03/3f/N5lxmkX2_o.png)

## License

Lorem Ipsum Dor Els Solem.
