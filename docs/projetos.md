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
    "nome": "Projeto A",
    "descricao": "Projeto criado automaticamente",
    "ativo": "1",
    "data_inicio": "2021-10-17",
    "data_fim": "2021-11-17",
    "cliente_id": "1",
    "prioridade": "medium"
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
  "id": 3,
  "nome": "Projeto D",
  "descricao": "Nada a declarar",
  "ativo": "1",
  "data_inicio": "2021-10-17",
  "data_fim": "2021-11-17",
  "cliente_id": "2",
  "prioridade": "medium",
  "membros": [
    {
      "id": 1,
      "nome": "Usuário A"
    },
    {
      "id": 2,
      "nome": "Usuário B"
    }
  ]
}
```

### Store

```HTTP
POST /projetos
```

**Request**
```json
{
  "nome": "Projeto D",
  "descricao": "Nada a declarar",
  "data_inicio": "2021-10-17",
  "data_fim": "2021-11-17",
  "cliente_id": 2,
  "prioridade": "medium",
  "membros": [1, 2]
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
  "nome": "Projeto D atualizado",
  "membros": [3]
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