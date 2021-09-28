## Projetos

### Index

```HTTP
GET /projetos
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
    "nome": "Projeto atualizado",
    "cliente_id": "1",
    "created_at": "2021-09-26T16:43:28.000000Z",
    "updated_at": "2021-09-26T17:15:55.000000Z"
  },
  {
    "id": 3,
    "nome": "Projeto teste 2",
    "cliente_id": "2",
    "created_at": "2021-09-26T17:17:18.000000Z",
    "updated_at": "2021-09-26T17:17:18.000000Z"
  }
]
```

### Show

```HTTP
GET /projetos/:id
```

**Request**
```json
{}
```

**Response**
```json
{
  "id": 1,
  "nome": "Projeto teste",
  "cliente_id": "1",
  "created_at": "2021-09-26T16:43:28.000000Z",
  "updated_at": "2021-09-26T16:43:28.000000Z"
}
```

### Store

```HTTP
POST /projetos
```

**Request**
```json
{
	"nome": "Projeto teste 2",
	"cliente_id": 2
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
PUT /projetos/:id
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
	"nome": "Projeto atualizado",
	"cliente_id": 1
}
```

### Destroy

```HTTP
DELETE /projetos/:id
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