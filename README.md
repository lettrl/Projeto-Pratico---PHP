# Projeto Prático PHP - Sentio Tech Labs

Projeto prático desenvolvido para a disciplina de **PHP**, com o objetivo de criar um site institucional moderno e responsivo para uma empresa fictícia. O projeto inclui um formulário de contato funcional que salva os dados em um banco de dados **MySQL**.

---

## Como Executar o Projeto

Para rodar este projeto em sua máquina local, siga os passos abaixo.

### 1. Pré-requisitos

* Você precisa ter o **XAMPP** (ou um servidor similar como WAMP, MAMP) instalado.

### 2. Instalação

1.  **Clone o Repositório**
    (Seu colega fará isso. Você já tem a pasta.)

2.  **Mova a Pasta do Projeto**
    Mova a pasta `PROJETO-PRATICO---PHP` para dentro da pasta `htdocs` da sua instalação do XAMPP.
    * *Localização Padrão (Windows):* `C:\xampp\htdocs\`

3.  **Inicie o XAMPP**
    Abra o Painel de Controle do XAMPP e inicie os serviços **Apache** e **MySQL**.

4.  **Importe o Banco de Dados**
    O arquivo `sentio_db.sql` contém a estrutura do banco de dados.
    * Abra o **phpMyAdmin** (clicando em "Admin" na linha do MySQL no painel do XAMPP).
    * Crie um novo banco de dados chamado exatamente: `sentio_db`
    * Selecione o banco `sentio_db` na lista à esquerda.
    * Clique na aba **"Importar"**.
    * Clique em "Escolher arquivo" e selecione o arquivo `sentio_db.sql`.
    * Clique em "Executar".

### 3. Acessando o Projeto

Abra seu navegador e acesse a seguinte URL (use o nome exato da pasta):

`http://localhost/PROJETO-PRATICO---PHP/`

O site deve carregar e o formulário de contato estará funcional.

---

## Sobre o Projeto

O site apresenta os serviços da empresa **Sentio Tech Labs**, especializada em:

* Desenvolvimento Web e Mobile
* Cibersegurança
* Inteligência Artificial e Análise de Dados

## Tecnologias Utilizadas

| Categoria | Tecnologias |
| :--- | :--- |
| Front-end | HTML5, CSS3 (inline) |
| Back-end | PHP |
| Banco de Dados | MySQL (com PDO) |
| Servidor | XAMPP (Apache) |

## Estilo e Design

### Tema Escuro (Dark Theme)
O projeto utiliza um **background preto** (`background-color: black`) como base, criando um contraste elegante com:
* Tipografia branca para leitura confortável;
* Gradientes de roxo e azul aplicados no cabeçalho (`header`) com `linear-gradient`.

### Tipografia
* **Títulos:** Fonte `monospace` para destaque (ex: `header h1`, `.bloco-um h1`);
* **Corpo do texto:** Fontes `Franklin Gothic Medium`, `Arial Narrow` e `sans-serif`.

### Elementos Interativos
* Botões com efeitos `hover` para realce ao passar o mouse;
* Layout responsivo implementado com **Flexbox** (`display: flex`) e `flex-wrap`, adaptando os cards e seções em diferentes tamanhos de tela.

## Estrutura dos Arquivos

* `index.php`: A página principal (landing page) que contém o formulário HTML e o CSS.
* `sentio.php`: O script PHP que recebe os dados do formulário (`POST`) e os insere no banco de dados.
* `sentio_db.sql`: O arquivo de dump do MySQL para criar a estrutura do banco.
* `README.md`: Este arquivo com as instruções.