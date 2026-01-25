# 🎬 Moviestar – Site de Avaliações de Filmes

📍 Projeto colaborativo da turma
Curso Técnico em Informática para Internet – **SENAC**

Este repositório contém um site já desenvolvido, porém com **problemas de organização, estrutura e padronização de código**.
O objetivo deste projeto é **simular um projeto real do dia a dia de um desenvolvedor**, onde o código já existe e precisa ser analisado, organizado, corrigido e melhorado em equipe.

Cada aluno deverá seguir corretamente o passo a passo descrito neste README para **clonar o projeto, realizar modificações e colaborar com o repositório principal**, respeitando as boas práticas de versionamento com Git e GitHub.

---

## 👥 Organização do Trabalho

* Este é o **repositório principal da turma**
* É **proibido** trabalhar diretamente na branch `main`
* Cada aluno deve seguir obrigatoriamente o fluxo abaixo:

1. Criar um **fork** do projeto
2. Clonar o fork para o computador
3. Criar uma **branch própria**
4. Realizar suas modificações
5. Enviar as alterações via **Pull Request**

Esse fluxo representa a forma como **projetos reais são desenvolvidos no mercado de trabalho**, especialmente em equipes e projetos open source.

---

## 📂 Estrutura do Projeto

```
Moviestar_projeto
├── css/
├── dao/
├── img/
├── models/
├── templates/
├── imagens do readme/
├── auth.php
├── auth_process.php
├── dashboard.php
├── db.php
├── editmovie.php
├── editprofile.php
├── globals.php
├── index.php
├── indexx.php
├── logout.php
├── movie.php
├── movie_process.php
├── newmovie.php
├── profile.php
├── review_process.php
├── search.php
├── README.md
└── user_process.php
```

Cada pasta e arquivo possui uma função específica dentro do sistema, sendo responsabilidade dos alunos **entender, organizar e melhorar essa estrutura** ao longo do projeto.

---

## 🛠️ Tecnologias Utilizadas

* PHP
* HTML
* CSS
* Bootstrap
* MySQL
* XAMPP

---

## 🚀 Passo a Passo para os Alunos

## 1️⃣ Criar um Fork do Projeto

* Acesse o **repositório principal da turma**
* Clique no botão **Fork**, no canto superior direito do GitHub

<p align="center">
  <img src="imagens do readme/fork.jpg">
</p>

Em seguida, clique em **Create fork** (não é necessário alterar nenhuma informação).

<p align="center">
  <img src="imagens do readme/fork-2.jpg">
</p>

Após esse processo, uma **cópia do projeto será criada no seu perfil do GitHub**.
Essa cópia será o local onde você irá trabalhar.

---

## 2️⃣ Clonar o Repositório

Primeiro, crie uma pasta dentro do diretório do **XAMPP (`htdocs`)** para armazenar o projeto clonado.

<p align="center">
  <img src="imagens do readme/Pasta do clone.jpg">
</p>

Depois, acesse o seu fork no GitHub e copie o código do repositório.

<p align="center">
  <img src="imagens do readme/codigo-fork.jpg">
</p>

Agora, no **VS Code**, abra a pasta criada e no terminal e execute o comando para clonar o projeto:

<p align="center">
  <img src="imagens do readme/clonando.jpg">
</p>

Após isso, você terá **uma cópia completa do projeto no seu computador (repositório local)**.

---

## 3️⃣ Criar uma Branch

Antes de fazer qualquer alteração no projeto, é obrigatório criar uma **branch própria**.

<p align="center">
  <img src="imagens do readme/exemplo de branch.jpg">
</p>

### Exemplos de nomes de branches:

```bash
git checkout -b nome-do-aluno-funcao
git checkout -b alex-estilizacao-css
```

Utilize nomes claros, indicando **quem fez a alteração e qual foi a função executada**.

---

## 4️⃣ Executar o Projeto Localmente

1. Com a pasta do projeto em `htdocs`
2. Inicie o **Apache** e o **MySQL** no XAMPP
3. Configure o banco de dados no arquivo `db.php`
4. Acesse o projeto pelo navegador:

```
http://localhost/Moviestar_projeto
```

---

## 5️⃣ Commits

Sempre que fizer alterações na sua branch, é importante **salvar essas mudanças com commits**.

```bash
git add .
git commit -m "Descrição clara do que foi feito"
```

🔹 Utilize mensagens de commit **objetivas e diretas**, explicando exatamente o que foi alterado no código.

---

## 6️⃣ Enviar para o GitHub

Após concluir suas alterações e testar o projeto localmente, envie sua branch para o GitHub:

```bash
git push origin nome-da-sua-branch
```

⚠️ As alterações **não irão para o repositório principal**, apenas para o seu fork.

---

## 7️⃣ Pull Request

Para que suas alterações sejam avaliadas e possivelmente adicionadas ao projeto principal, é necessário criar um **Pull Request**.

* Clique em **Contribute**
* Depois em **Open a pull request**

<p align="center">
  <img src="imagens do readme/pullrequest.jpg">
</p>

Em seguida:

* Escreva um **título claro**
* Descreva detalhadamente as mudanças feitas no código
* Clique em **Create pull request**

<p align="center">
  <img src="imagens do readme/pullrequest-2.jpg">
</p>

Os administradores do projeto irão **analisar suas alterações**.
Caso esteja tudo correto, o código será incorporado ao repositório principal.
Se houver problemas, o Pull Request poderá ser recusado ou devolvido para ajustes.

---

## 🏷️ Tags

Para manter uma melhor organização das versões do projeto, utilize **tags**:

```bash
git tag v1.0-organizacao-inicial
git push origin v1.0-organizacao-inicial
```

As tags ajudam a identificar **marcos importantes do desenvolvimento** do projeto.

---

