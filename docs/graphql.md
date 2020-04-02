# Graphql Playground

### Aluno
>Query
```
{
  # buscar os alunos com paginação
  alunos(page: 1) {
    data{
      tx_nome
    }
    paginatorInfo{
      count
      lastPage
      total
    }
  }

  # buscar um aluno específico
  aluno(id: 4) {
    tx_nome
  }
}
```
>Mutation
```
mutation {

  # Criar Aluno
  createAluno(
    tx_nome: "Douglas Playground"
    nu_idade: 21
    tx_email: "douglas.playground@gmail.com"
    nu_matricula: 123456789
  ){
    id
    tx_nome
    created_at
    nu_matricula
  }

  # Atualizar dados de Aluno
  updateAluno(
    id: 7
    tx_nome: "Douglas Playground"
    nu_idade: 21
    tx_email: "douglas.playground@gmail.com"
    nu_matricula: 123456789
  ){
    id
    tx_nome
    created_at
    nu_matricula
  }
}

  # Excluir registro de Aluno
  deleteAluno(
    id: 7
  ){
    id
    tx_nome
    deleted_at
  }

```
