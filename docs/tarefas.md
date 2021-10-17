## Tarefas

### Index

```HTTP
GET /tarefas
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
    "titulo": "Modelo Entidade Relacionamento",
    "descricao": "Gerar o modelo ER em PDF",
    "data_inicio": "2021-10-25",
    "data_fim": "2021-10-28",
    "tipo_tarefa_id": "1",
    "status_tarefa_id": "1"
  }
]
```

### Show

```HTTP
GET /tarefas/:id
```

**Request**
```json
{}
```

**Response**
```json
{
  "id": 1,
  "titulo": "Tarefa A",
  "descricao": null,
  "data_inicio": "2021-10-17",
  "data_fim": "2021-11-17",
  "tipo_tarefa_id": "1",
  "status_tarefa_id": "1",
  "membros": [
    {
      "id": 3,
      "nome": "Usuário C"
    }
  ]
}
```

### Store

```HTTP
POST /tarefas
```

**Request**
```json
{
  "titulo": "Modelo relacional",
  "descricao": "Gerar o modelo ER em PDF",
  "data_inicio": "2021-10-25",
  "data_fim": "2021-10-28",
  "tipo_tarefa_id": 1,
  "status_tarefa_id": 1,
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
PUT /tarefas/:id
```

**Request**
```json
{
  "titulo": "Modelo Entidade Relacionamento"
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
DELETE /tarefas/:id
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