## Instalação

### Pré-requisitos

Certifique-se de que o XAMP está instalado em seu sistema, com o Apache e o MySQL ativos.

### Passo a passo

1. Clone o repositório na pasta `htdocs` do XAMPP:
   ```bash
   git clone https://github.com/viniciusgois711/Gerencia-Associados-Anuidades.git

2. Importe o banco de dados. No cmd, execute o seguinte comando:
   ```bash
    "C:\xampp\mysql\bin\mysql" -u root -p < C:\xampp\htdocs\Gerencia-Associados-Anuidades\meu_database.sql
*** OBS.: caminho padrão, certifique se realmente é esse caminho para acessar sua pasta do mysql, e htdocs. ***

3. Abra o navegador e acesse a URL abaixo para testar o projeto:
   ```
   http://localhost/Gerencia-Associados-Anuidades/gerencia.html

## Como usar

### Área de associados

1. Ao abrir o link citado anteriormente, o gerente será encaminhado para a página inicial, onde escolherá entre acessar a parte de associados ou de anuidades.
2. Seguindo pelo botão de associados, tem-se a opção de criar um novo associado, onde será solicitado dados como Nome, Email, CPF e Data de Filiação.
3. Ao preencher esses dados integralmente e apertar no botão "Criar", irá adicionar esse associado à tabela de associados, e o gerente será encaminhado para a página de listagem.
4. Na página de listagem, estarão todos os associados cadastrados, tendo a opção de editar os dados ou até mesmo excluir.
5. Ainda na página de listagem, o gerente tem a opção de listar as anuidades que estão ligadas àquele associado, por enquanto ainda vazia, pois ainda não foram adicionadas nenhuma anuidade.

Para voltar à página inicial, basta clicar no botão "Gerência de Associados e Anuidades"

### Área de anuidades

1. Seguindo agora pelo botão de anuidades, tem-se a opção de criar uma nova anuidade, onde será solicitado dados como Ano e Valor.
2. Ao preencher esses dados integralmente e apertar no botão "Criar", irá adicionar essa anuidade à tabela de anuidades, e o gerente será encaminhado para a página de listagem de anuidades.
*** OBS.: O gerente so poderá cadastrar uma nova anuidade se já houver um associado cadastradado naquele ano. ***
*** OBS.: É necessário criar primeiro o associado para poder criar a anuidade, se não, a anuidade não estará conectada ao associado criado posteriormente, precisando assim, ser atualizado a tabela de anuidades.  ***
4. Na página de listagem, estarão todos os associados cadastrados, tendo a opção de editar os dados ou até mesmo excluir.

Agora, o gerente pode voltar na página de listagem de associados, e clicar no botão "Listar Anuidades", onde serão exibidos os dados das anuidades atreladas ao associado.
