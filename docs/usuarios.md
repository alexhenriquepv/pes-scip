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
    "id": 1,
    "nome": "Usuário atualizado",
    "perfil_id": "1",
    "created_at": "2021-09-26T16:43:28.000000Z",
    "updated_at": "2021-09-26T17:15:55.000000Z"
  },
  {
    "id": 3,
    "nome": "Usuário teste 2",
    "perfil_id": "2",
    "created_at": "2021-09-26T17:17:18.000000Z",
    "updated_at": "2021-09-26T17:17:18.000000Z"
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
  "id": 1,
  "nome": "Usuário teste",
  "perfil_id": "1",
  "created_at": "2021-09-26T16:43:28.000000Z",
  "updated_at": "2021-09-26T16:43:28.000000Z"
}
```

### Store

```HTTP
POST /usuarios
```

**Request**
```json
{
	"nome": "Usuário teste 2",
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