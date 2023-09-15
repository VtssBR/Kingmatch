# 🕹 Kingmatch

Foi elaborado como projeto acadêmico para avaliação na faculdade, consistiu na criação de um site que utiliza os princípios da programação orientada a objetos em conjunto com o PDO do PHP. O objetivo principal foi desenvolver as operações básicas de um sistema CRUD, permitindo o cadastro, listagem, atualização e exclusão de registros.

## ⚙ Funcionalidade

O projeto compreende uma página inicial que oferece funcionalidades de login e registro. Após a validação do cadastro, o sistema redireciona o usuário para a página principal, onde seria realizado o registro de campeonatos. Além disso, inclui um painel de administração que permite a visualização, edição e exclusão dos registros cadastrados.

## 🧰 Tecnologias 

* PHP - Responsável pela estrutura da página e logica de conexão ao banco de dados
* CSS - Utilizado para a estilização das páginas.
* MySQL - Banco local utilizado no projeto
* Workbench - Implementado para visualização de registros e alteração (opcional)
* XAMPP - Utilizado para o  ambiente de desenvolvimento local na web.

## 🔌 Inicialização 

Para começar, siga os passos abaixo:

Primeiramente é necessario instalar o XAMPP

* Localize a pasta **xampp** no disco C: do computador e localize a pasta **htdocs**

* Dentro da pasta inclua o arquivo com o projeto

* Logo apos inicie o XAMPP e inicie o MySQL e O Apache

* Abra o navegador e na URl digite por localhost 

* Clique na pasta do projeto e assim abrira-lo

* Lembrando que meu projeto esta configurado para rodar na porta 3312 podendo a sua ser a padrao 3306, assim sendo necessario remova a linha do codigo na classe de Conexão **";port=3312"**

## 📷 Imagens 

Pagina de acesso

![Preview](./.github/Entrar.png)

Pagina de cadastro

![Preview](./.github/Registrar.png)

Pagina inicial 

![Preview](./.github/PaginaInicial.png)

Painel de cadastro onde é possivel atualizar e excluir o cadastro

![Preview](./.github/PainelDeCadastro.png)

Pagina de alteração de registros 

![Preview](./.github/Alterar.png)