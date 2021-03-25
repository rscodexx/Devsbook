<p align="center">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/rscodexx/devsbook">

  <a href="https://github.com/rscode/devsbook/commits/master">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/rscodexx/devsbook">
  </a>

   <img alt="License" src="https://img.shields.io/badge/license-MIT-brightgreen">
   <a href="https://github.com/rscodexx/devsbook/stargazers">
    <img alt="Stargazers" src="https://img.shields.io/github/stars/rscodexx/rscodexx?style=social">
  </a>

  <a href="https://rscode.com.br">
    <img alt="Feito por RS CODE" src="https://img.shields.io/badge/feito%20por-RS CODE-%237519C1">
  </a>

  <a href="https://blog.rscode.com.br/">
    <img alt="Stargazers" src="https://img.shields.io/badge/Blog-RS CODE-%237159c1?style=flat&logo=ghost">
    </a>


</p>
<h1 align="center">
    DevsBook
</h1>

<h4 align="center"> 
	🚧  Devsbook Concluído 🚧
</h4>

<p align="center">
 <a href="#-sobre-o-projeto">Sobre</a> •
 <a href="#-funcionalidades">Funcionalidades</a> •
 <a href="#-layout">Layout</a> • 
 <a href="#-como-executar-o-projeto">Como executar</a> • 
 <a href="#-tecnologias">Tecnologias</a> •
 <a href="#-autor">Autor</a> • 
 <a href="#user-content--licença">Licença</a>
</p>


## 💻 Sobre o projeto

Devsbook - É uma rede social desenvolvida baseada no facebook, desenvolvida a fins de estudo.

---

## ⚙️ Funcionalidades

- [x] Usuários podem se cadastrar através de:
    - [x] E-mail
    - [x] Senha
    - [x] Data de nascimento

- [x] Usuários depois de se cadastrar podem:
    - [x] Alterar foto de perfil, capa, senha, e-mail e data de nascimento.
    - [x] Cadastrar cidade e trabalho.
    - [x] Buscar amigos.
    - [x] Adicionar amigos.
    - [x] Criar postagens, comentar e curtir.
    - [x] Comentar e curtir postagens de amigos.
    - [x] Visualizar perfil dos amigos.

---

## 🎨 Layout

O layout da aplicação foi desenvolvidor em HTML5 e CSS3.

<img alt="HTML5" src="https://img.shields.io/badge/html5%20-%23E34F26.svg?&style=for-the-badge&logo=html5&logoColor=white"/> <img alt="CSS3" src="https://img.shields.io/badge/css3%20-%231572B6.svg?&style=for-the-badge&logo=css3&logoColor=white"/>


### Mobile

<p align="center">
  <img alt="Devsbook" title="Devsbook" src="http://rscode.com.br/examples/06.jpg" width="200px">

  <img alt="Devsbook" title="Devsbook" src="http://rscode.com.br/examples/05.jpg" width="200px">
</p>

### Web

<p align="center" style="display: flex; align-items: flex-start; justify-content: center;">

  <img alt="NextLevelWeek" title="#NextLevelWeek" src="http://rscode.com.br/examples/web02.png" width="400px">
</p>

---

## ⚙ Como executar o projeto

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Composer](https://getcomposer.org/).
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

#### 🎲 Instalando

```bash

# Você pode clonar este repositório OU baixar o .zip.

$link para baixar direto: https://github.com/rscodexx/Devsbook

# Para clonar:

$ git clone https://github.com/rscodexx/Devsbook.git

# Ao descompactar, é necessário rodar o composer pra instalar as dependências e gerar o autoload.

# Vá até a pasta do projeto, pelo prompt/terminal e execute:

$ composer install

# Depois é só aguardar.

```

#### 🎲 Configurando

```bash

# Todos os arquivos de configuração e aplicação estão dentro da pasta src.

# As configurações de Banco de Dados e URL estão no arquivo src/Config.php

# É importante configurar corretamente a constante BASE_DIR:

$ const BASE_DIR = '/PastaDoProjeto/public';

# É necessário importar as tabelas no seu banco de dados que estão em src/db.


```


#### 🧭 Rodando a aplicação.

```bash

# Basta acessar a pasta public do projeto.

# O ideal é criar um alias específico no servidor que direcione diretamente para a pasta public.

```

---

## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

#### **Front-End**  ([HTML5](https://developer.mozilla.org/pt-BR/docs/Web/Guide/HTML/HTML5)  +  [CSS3](https://devdocs.io/css/) + ([JAVASCRIPT](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript))

#### **Back-End**  ([PHP7](https://www.php.net/docs.php)  +  [MVC](https://www.devmedia.com.br/a-arquitetura-mvc-no-desenvolvimento-em-php/23121) + ([MARIADB](https://mariadb.com/kb/en/documentation/))


---

## 💪 Como contribuir para o projeto

1. Faça um **fork** do projeto.
2. Crie uma nova branch com as suas alterações: `git checkout -b my-feature`
3. Salve as alterações e crie uma mensagem de commit contando o que você fez: `git commit -m "feature: My new feature"`
4. Envie as suas alterações: `git push origin my-feature`
> Caso tenha alguma dúvida confira este [guia de como contribuir no GitHub](./CONTRIBUTING.md)

---

## 🦸 Autor

<a href="https://rscode.com.br">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/80411629?s=460&u=b013fbff0e47f42e5f2c819849416285d380d5e7&v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Rafael Santos</b></sub></a> <a href="https://rscode.com.br/"</a>
 <br />

[![Twitter Badge](https://img.shields.io/badge/-@raffrenan-1ca0f1?style=flat-square&labelColor=1ca0f1&logo=twitter&logoColor=white&link=https://twitter.com/tgmarinho)](https://twitter.com/raffrenan) [![Linkedin Badge](https://img.shields.io/badge/-Thiago-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/tgmarinho/)](https://www.linkedin.com/in/raffrenan/)
[![Gmail Badge](https://img.shields.io/badge/-tgmarinho@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:raffrenan@gmail.com)](mailto:raffrenan@gmail.com)

---

## 📝 Licença

Este projeto esta sobe a licença [MIT](./LICENSE).

Feito com ❤️ por Rafael Santos 👋🏽 [Entre em contato!](https://www.rscode.com.br)

---