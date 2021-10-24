## Usuários

### Index

```HTTP
GET /usuarios
```

**Request**
```json
{}
```

**Response**
```json
[
  {
    "id": 2,
    "nome": "Usuário teste 3",
    "perfil_id": "2",
    "cpf": "929.999.999-22",
    "carga_horaria": "30",
    "email": "teste@email.com",
    "senha": "babyshark"
  }
]
```

### Show

```HTTP
GET /usuarios/:id
```

**Request**
```json
{}
```

**Response**
```json
{
  "id": 2,
  "nome": "Usuário teste 3",
  "perfil_id": "2",
  "cpf": "929.999.999-22",
  "carga_horaria": "30",
  "email": "teste@email.com",
  "senha": "babyshark",
  "perfil": {
    "id": 2,
    "nome": "Dev Pleno"
  }
}
```

### Store

```HTTP
POST /usuarios
```

**Request**
```json
{
	"nome": "Usuário teste 3",
	"email": "teste@email.com",
	"senha": "babyShark",
	"carga_horaria": 30,
	"cpf": "929.999.999-22",
	"perfil_id": 2
}
```

**Response**
```json
{
  "message": "ok"
}
```

### Update

```HTTP
PUT /usuarios/:id
```

**Request**
```json
{
	"nome": "xxx"
}
```

**Response**
```json
{
	"nome": "Usuário atualizado",
	"perfil_id": 1
}
```

### Destroy

```HTTP
DELETE /usuarios/:id
```

**Request**
```json
{}
```

**Response**
```json
{
  "message": "ok"
}
```