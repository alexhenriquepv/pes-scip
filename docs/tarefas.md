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
    "id": 2,
    "titulo": "Modelo relacional",
    "descricao": "Gerar o modelo ER em PDF",
    "data_inicio": "2021-10-25",
    "data_fim": "2021-10-28",
    "tipo_tarefa_id": "1",
    "status_tarefa_id": "1",
    "projeto_id": "1",
    "tarefa_antecessora_id": 1,
    "progresso": 0
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
  "id": 2,
  "titulo": "Modelo relacional",
  "descricao": "Gerar o modelo ER em PDF",
  "data_inicio": "2021-10-25",
  "data_fim": "2021-10-28",
  "tipo_tarefa_id": "1",
  "status_tarefa_id": "1",
  "projeto_id": "1",
  "progresso": 0,
  "membros": [],
  "lancamentos": [],
  "projeto": {
    "id": 1,
    "nome": "Projeto A"
  }
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
  "projeto_id": 1,
  "tarefa_antecessora_id": 1,
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