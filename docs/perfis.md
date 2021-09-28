## Perfis

### Index

```HTTP
GET /perfis
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
    "nome": "Perfil teste"
  }
]
```

### Show

```HTTP
GET /perfis/:id
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
POST /perfis
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
PUT /perfis/:id
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
DELETE /perfis/:id
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