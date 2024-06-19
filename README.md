## Índice

- [O Desafio](#o-desafio)
- [Pré-requisitos](#pré-requisitos)
- [Passos](#passos)
  1. [Realize o fork do repositório](#1-realize-o-fork-do-repositório)
  2. [Clone o repositório Forkado](#2-clone-o-repositório-forkado)
  3. [Instale as dependências Composer](#3-instale-as-dependências-composer)
  4. [Configurando .env](#4-configurando-env)
  5. [Configurando o Banco de Dados](#5-configurando-o-banco-de-dados)
  6. [Inicialize o servidor](#6-inicialize-o-servidor)
  7. [Gere uma chave de aplicação](#7-gere-uma-chave-de-aplicação)
  8. [Gere um link com storage](#8-gere-um-link-com-storage)
  9. [Execute as migrations e seeders](#9-execute-as-migrations-e-seeders)
- [O que será avaliado](#o-que-será-avaliado)
- [Links úteis](#links-úteis)
- [Desenvolvedores/Contribuintes](#desenvolvedorescontribuintes)

## O Desafio

O desafio consiste em desenvolver um site de filmes utilizando o framework Laravel junto com o Livewire. Este site terá três páginas principais:

1. Página de Listagem de Filmes: Uma página que exibe todos os filmes cadastrados.
2. Página de Cadastro de Filmes: Um formulário para adicionar novos filmes ao sistema.
3. Página de Visualização de Filme: Uma página que mostra os detalhes de um filme específico.

### Objetivos Principais

1. Formulário de Cadastro:
    - Implementar o formulário de cadastro de filmes utilizando as classes de formulário e atributos de validação do Livewire.
    - Certificar-se de que os filmes sejam salvos corretamente no banco de dados.

2. Listagem de Filmes:
    - Programar a página de listagem para exibir todos os filmes cadastrados.
    - Buscar os filmes diretamente do banco de dados.

3. Visualização de Filme:
    - Utilizar parâmetros de URL do Laravel para buscar e exibir os dados do filme.
    - Mostrar as informações detalhadas de um filme na página.

### Desafios Bônus

1. Paginação na Listagem de Filmes:
    - Adicionar a funcionalidade de paginação na página de listagem de filmes para melhorar a experiência do usuário em listas grandes.
2. Após cadastrar um novo filme, redirecionar o usuário para a página de visualização desse filme.
3. Mensagem de validação no formulário
    - Apresentar as mensagens de validação dos campos do formulário

## Pré-requisitos

- [PHP](https://www.php.net/) +8.2
- [Composer](https://getcomposer.org/download/)
- Acesso à internet.


### 5. Configurando o Banco de Dados

### Como banco de dados optei pela opção de PostgreSQL * Checkar .env *

O projeto está configurado para utilizar o SQLite como banco de dados, então vamos ensinar a como configurar o SQLite.

Para utilizar o SQLite é bem simples, apenas crie o arquivo `database.sqlite` dentro do diretório `database` dessa forma:

```bash
.
├── [...]
│
├── database
│   ├── factories
│   ├── migrations
│   ├── seeders
│   ├── .gitignore
│   └── database.sqlite # Crie esse arquivo
└── [...]
```

Caso possua o conhecimento e queira utilizar outro banco sinta-se à vontade.

### 6. Inicialize o servidor

Inicialize o servidor PHP:

```bash
php artisan serve
```

### 7. Gere uma chave de aplicação

Execute o seguinte comando para gerar uma chave de aplicação:

```bash
php artisan key:generate
```

### 8. Gere um link com storage

Execute o seguinte comando para gerar um link simbólico com a pasta storage:

```bash
php artisan storage:link
```

### 9. Execute as migrations e seeders

Se o projeto Laravel requer migrations e seeders, execute os seguintes comandos:

```bash
php artisan migrate

php artisan db:seed
```

