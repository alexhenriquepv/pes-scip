## Lançamentos

### Index

```HTTP
GET /lancamentos
```

Ou filtrando pelo id da tarefa

```HTTP
GET /lancamentos?tarefa_id=1
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
    "tarefa_id": "1",
    "usuario_id": "1",
    "qtd_horas": "3",
    "data": "2021-11-08"
  }
]
```

### Show

```HTTP
GET /lancamentos/:id
```

**Request**
```json
{}
```

**Response**
```json
{
  "id": 1,
  "tarefa_id": "1",
  "usuario_id": "1",
  "qtd_horas": "3",
  "data": "2021-11-08",
  "descricao": "Descrição do lançamento",
  "tarefa": {
    "id": 1,
    "titulo": "Modelo relacional",
    "progresso": 3
  },
  "usuario": {
    "id": 1,
    "nome": "Usuário A"
  }
}
```

### Store

```HTTP
POST /lancamentos
```

**Request**
```json
{
	"tarefa_id": 1,
	"usuario_id": 1,
	"qtd_horas": 2,
	"data": "2021-11-18",
	"descricao": "Descrição do lançamento"
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
Não se aplica
```

### Destroy

```HTTP
DELETE /lancamentos/:id
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