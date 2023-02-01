<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Definição do Projeto

Esse é um projeto de uma locadora criado para que eu possa colocar em prática meus estudos do framework Laravel e também de JavaScript. O projeto em si é um sistema de uma locadora web que contém dois tipos de usuários diferentes: o admin, que quando logado possui acesso a uma área de telas que o permite visualizar, criar, alterar, e deletar filmes, gêneros e funcionários da fictícia locadora, bem como visualizar estatísticas sobre o também fictício negócio, como um gráfico mês a mês dos lucros dos alugueis de filmes por ano, ao lado de dados mais detalhados sobre seus lucros, descontando impostos e o salário dos funcionários em determinado mês. No segundo tipo de usuário, o locatário, são dois os mecanismos principais: o de locação e o de devolução de filmes (incluindo um sistema de devolução automática de filmes quando a data de validade do aluguel vencer), ambos autoexplicativos. Na área do locatário também se tem um sistema dinâmico de pesquisa de filmes feito com Javascript, que elimina todos os filmes que não contêm em seu título os caracteres digitados pelo usuário na barras e pesquisa. 
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

Inicie as migrations do banco de dados

    php artisan migrate

Inicie o seeding do banco de dados

    php artisan db:seed

Inicialize o servidor de desenvolvimento

    php artisan serve

É possível accessar o servidor pela porta http://localhost:8000

## Layouts

## Geral

![layout-de-login](https://images2.imgbox.com/22/6c/tws6TTEm_o.png)
Layout da página de login

![layout-de-cadastro](https://images2.imgbox.com/9d/45/JmhYy8EX_o.png)
Layout da página de cadastro

## Páginas do admin

![layout-de-adm_estatisticas_1](https://images2.imgbox.com/96/69/0TdCWArc_o.png)
Imagem 1 do layout da página de estatísticas

![layout-de-adm_estatisticas_2](https://images2.imgbox.com/b6/24/3lp6HRJx_o.png)
Imagem 2 do layout da página de estatísticas

![layout-de-adm_funcionarios_1](https://images2.imgbox.com/8e/9c/MGSISYtX_o.png)
Imagem 1 do layout da página de funcionários

![layout-de-adm_funcionarios_2](https://images2.imgbox.com/44/4e/XINUYMqp_o.png)
Imagem 2 do layout da página de funcionários

![layout-de-crud_filmes_generos_1](https://images2.imgbox.com/18/c7/7wz4d1YA_o.png)
Imagem 1 do layout da página de CRUD de filmes e gêneros

![layout-de-crud_filmes_generos_2](https://images2.imgbox.com/64/b1/EjFXxRe1_o.png)
Imagem 1 do layout da página de CRUD de filmes e gêneros

![layout-de-crud_filmes_generos_3](https://images2.imgbox.com/62/ad/myVrGOtF_o.png)
Imagem 1 do layout da página de CRUD de filmes e gêneros

## Páginas do locatário

![layout-da-lista-filmes](https://images2.imgbox.com/67/30/pXMR4RK1_o.png)
Imagem do layout da página principal do locatário, a lista de filmes disponíveis para o aluguel

![layout-da-lista-filmes-pesquisa](https://images2.imgbox.com/8f/82/4d5VmFpn_o.png)
Imagem do layout da página principal no modo de pesquisa

![layout-da-meus-filmes-alugados](https://images2.imgbox.com/9e/9f/5GzQnmkJ_o.png)
Imagem do layout da página de filmes alugados do usuário logado

## Diagrama de Dados

![diagrama-de-dados](https://images2.imgbox.com/03/3f/N5lxmkX2_o.png)