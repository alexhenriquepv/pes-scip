# API
[Perfis](perfis.md)
[Usuários](usuarios.md)
[Clientes](clientes.md)
[Projetos](projetos.md)
<!-- [Tarefas](tarefas.md) -->
<!-- [Lançamentos](lancamentos.md) -->

# Configuração

## Passo 1 - Criar a migration

```php
php artisan make:migration create_exemplo_table
```

## Passo 2 -Executar a migration

```php
php artisan migrate
```

### Opcional - Resetar o banco

```php
php artisan migrate:rollback

php artisan migrate:refresh
```

## Passo 3 - Criar o model

```php
php artisan make:model NomeDoModelo
```

## Passo 4 - Criar o controller

```php
php artisan make:controller NomeController
```

## Passo 5 - Rodar a aplicação