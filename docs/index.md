# API
[Perfis](perfis.md)
[Usuários](usuarios.md)
[Clientes](clientes.md)
[Projetos](projetos.md)
<!-- [Tarefas](tarefas.md) -->
<!-- [Lançamentos](lancamentos.md) -->

# Configuração

## Variáveis de ambiente
Devem ser definidas no arquivo ```.env```.
Use o arquivo ```.env.example``` como modelo.

## Banco de Dados
Caso queira utlizar um SQLite, crie o arquivo no diretório ```/database```.
Ex: ```/database/exemplo.sqlite```

## Migrations

Limpar o banco

```php
php artisan migrate:rollback

php artisan migrate:refresh
```

Criar as migrations necessárias

```php
php artisan make:migration create_exemplo_table
```

E executar

```php
php artisan migrate
```


### Preencher com dados Fakes

```php
php artisan db:seed
```
Atualmente preenche a tabela de **Status de tarefa** e **Tipos de tarefa**.

## Criar o model

```php
php artisan make:model NomeDoModelo
```

## Criar o controller

```php
php artisan make:controller NomeController
```

## Rodar a aplicação
```php
php artisan serve
```