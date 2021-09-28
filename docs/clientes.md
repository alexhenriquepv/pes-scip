## Clientes

### Index

```HTTP
GET /clientes
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
    "nome": "Cliente teste"
  }
]
```

### Show

```HTTP
GET /clientes/:id
```

**Request**
```json
{}
```

**Response**
```json
{
  "id": 1,
  "nome": "nome alterado"
}
```

### Store

```HTTP
POST /clientes
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
  "message": "ok"
}
```

### Update

```HTTP
PUT /clientes/:id
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
  "message": "ok"
}
```

### Destroy

```HTTP
DELETE /clientes/:id
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