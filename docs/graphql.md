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

  # Excluir registro de Aluno
  deleteAluno(
    id: 7
  ){
    id
    tx_nome
    deleted_at
  }

}

```

### Matéria
>Query
```
{
  # buscar as matérias com paginação
  materias(page: 1) {
    data{
      tx_nome
    }
    paginatorInfo{
      count
      lastPage
      total
    }
  }

  # buscar uma matéria específica
  materia(id: 4) {
    tx_nome
  }

}
```
>Mutation
```
mutation {

  # Criar Materia
  createMateria(
    tx_nome: "Curso de Programação"
    tx_descricao: "Um curso legal de programacao"
  ){
    id
    tx_nome
    created_at
  }

  # Atualizar dados de Matéria
  updateMateria(
    id: 6
    tx_nome: "Curso de Programação alterado"
    tx_descricao: " um curso de Programação alterada"
  ){
    id
    tx_nome
    tx_descricao
  }

  # Excluir registro de Materia
  deleteMateria(
    id: 6
  ){
    deleted_at
  }

}


```

### Alunos - Matéria (turma)
>Query
```
{
  # buscar alunos_materia com paginação
  alunomaterias(first: 2) {
    paginatorInfo {
      total
      lastPage
      count
    }
    data {
      id
      alunos_id
      materias_id
      aluno {
        tx_nome
        nu_matricula
      }
      materia {
        tx_nome
      }
    }
  }

  # buscar um registro específico
  alunomateria(id: 2) {
      id
      alunos_id
      materias_id
      aluno {
        tx_nome
        nu_matricula
      }
      materia {
        tx_nome
        tx_descricao
    	}
  }
}
```
>Mutation
```
mutation {

  # Criar Aluno Materia
  createAlunoMateria (
    alunos_id: 4
    materias_id: 3
  ) {
    aluno {
      tx_nome
      nu_matricula
    }
    materia {
      tx_nome
    }
  }

  # Atualizar dados de Matéria
  updateAlunoMateria(
    id: 13
    alunos_id: 4
    materias_id: 4
  ) {
    id
    aluno {
      tx_nome
    }
    materia {
      tx_nome
    }
    updated_at
  }

  # Excluir registro de Alunos Materia
  deleteAlunoMateria(
    id: 13
  ) {
    id
    deleted_at
  }

}
```
