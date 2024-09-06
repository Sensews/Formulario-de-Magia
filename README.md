# Projeto de Formulário de Magias para Sistema de RPG

Este é um projeto de um formulário interativo de magias, desenvolvido como parte de um sistema próprio de RPG. Utilizando tecnologias como **PHP**, **HTML**, **CSS**, **JavaScript** e **MySQL**, o formulário permite a criação, armazenamento e visualização de magias diretamente em um banco de dados, tornando a gestão das magias prática e eficiente. O projeto foi desenvolvido usando o ambiente **XAMPP**, que fornece um servidor Apache e MySQL para o armazenamento dos dados.

## Visão Geral

O projeto foi desenvolvido com o objetivo de facilitar a organização e a consulta de magias em meu sistema de RPG, parte de um hobby relacionado ao desenvolvimento de um universo de RPG de mesa. Ele foi projetado para estudantes e entusiastas que buscam uma maneira de integrar sua paixão por RPG com habilidades em desenvolvimento web e banco de dados.

Este formulário oferece:

- **Cadastro de magias**: Permite o registro detalhado de novas magias, como nome, descrição, tipo, círculo e componentes.
- **Visualização de magias**: As magias cadastradas podem ser listadas e visualizadas facilmente.
- **Armazenamento em banco de dados MySQL**: Todas as informações são salvas de forma persistente para futura consulta e manipulação.
- **Interface amigável e dinâmica**: Estilizada com CSS e funcionalidades interativas implementadas em JavaScript.

## Tecnologias Utilizadas

- **PHP**: Usado para gerenciar o backend, processar os dados do formulário e conectar com o banco de dados MySQL.
- **HTML/CSS**: Estrutura e estilização da página, proporcionando uma interface limpa e responsiva.
- **JavaScript**: Implementa funcionalidades dinâmicas e validações no frontend.
- **MySQL**: Banco de dados utilizado para armazenar todas as magias registradas.
- **XAMPP**: Ambiente de desenvolvimento local que inclui Apache e MySQL para rodar o projeto.

## Estrutura do Projeto

O projeto está dividido nas seguintes partes:

### Backend (PHP)
Responsável por processar os dados enviados pelo formulário e interagir com o banco de dados MySQL. As funções principais incluem:

- **Conexão ao banco de dados**: Um arquivo PHP dedicado para a conexão ao banco de dados, utilizando `mysqli_connect` para garantir a comunicação entre o frontend e o MySQL.
- **Validação e inserção de dados**: O formulário é validado e os dados são inseridos no banco após verificação.
- **Consulta de dados**: As magias salvas podem ser consultadas e exibidas dinamicamente.

### Frontend (HTML/CSS/JavaScript)
Responsável pela interface gráfica e interação com o usuário:

- **HTML**: Estrutura do formulário, incluindo campos para nome, descrição, tipo de magia, círculo, componentes, entre outros.
- **CSS**: Estilização do formulário com foco em usabilidade e responsividade.
- **JavaScript**: Adiciona interatividade, como validações em tempo real dos campos do formulário e efeitos visuais.

### Banco de Dados (MySQL)
A base de dados foi criada para armazenar os detalhes de cada magia. As tabelas no banco incluem:

- **Tabela de Magias**: Armazena o nome, descrição, tipo, círculo e outros atributos de cada magia.
  
### Ambiente de Desenvolvimento (XAMPP)
O **XAMPP** foi utilizado como ambiente de desenvolvimento local, fornecendo:

- **Apache**: Servidor web necessário para rodar o PHP.
- **MySQL**: Banco de dados para armazenamento persistente.

### Estrutura do Banco de Dados

A tabela principal deste projeto é a de `magias`, com os seguintes campos:

- `id`: Chave primária da magia (int, auto_increment).
- `nome`: Nome da magia (varchar).
- `descricao`: Descrição completa da magia (text).
- `tipo`: Tipo da magia (varchar).
- `circulo`: Círculo ao qual a magia pertence (int).
- `componentes`: Componentes necessários para conjurar a magia (text).

## Instalação e Configuração

### Pré-requisitos

- **XAMPP**: Baixe e instale o [XAMPP](https://www.apachefriends.org/index.html) para rodar o projeto localmente.
- **Navegador web**: Utilize qualquer navegador moderno para acessar o projeto.

### Passos para Rodar o Projeto

1. **Clone o repositório** para a pasta do servidor do XAMPP, normalmente localizada em:
   ```bash
   C:/xampp/htdocs/
   
### Inicie o XAMPP e ligue o Apache e MySQL.

### Crie o banco de dados:

1. Acesse o **phpMyAdmin** em `localhost/phpmyadmin`.
2. Crie um banco de dados chamado **magias_rpg**.
3. Importe o arquivo SQL fornecido ou crie as tabelas manualmente, conforme a estrutura descrita anteriormente.

### Acesse o projeto:

- No navegador, vá para `localhost/nome_do_projeto/`.

## Funcionalidades do Projeto

### 1. Cadastro de Magias
O formulário permite o cadastro de novas magias. Os campos incluem:

- Nome da Magia
- Descrição
- Tipo de Magia
- Círculo da Magia
- Componentes

### 2. Listagem e Consulta
Uma vez cadastradas, as magias podem ser listadas em uma página separada, onde o usuário pode visualizar detalhes completos de cada magia.

### 3. Validação e Feedback
O formulário possui validações tanto no frontend quanto no backend. O usuário é notificado caso tente enviar o formulário com informações incompletas ou inválidas.

## Screenshots

Adicione aqui screenshots do formulário e da interface de listagem de magias:

**Tela de Formulário:**
<img src="/print_criar_magias.png" />

**Tela de Listas de Magias:**
<img src="/print_lista_de_magias.png" />

## Autor

Desenvolvido por **[Seu Nome]**, estudante de Cibersegurança na **PUCPR**. Este projeto faz parte de um hobby relacionado ao desenvolvimento de sistemas próprios de RPG.
