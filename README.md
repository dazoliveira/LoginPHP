# Projeto Login PHP
# Instruções
1. Instalar o Servidor Apache.
2. Instalar o MySQL.
3. Instalar PHP 5 ou versões mais recentes.
4. Use o git para clonar este projeto.
5. Criar a tabela no MySQL utilizando o script do arquivo ScriptsMySQL.txt.
6. Salvar o projeto na pasta www ou a pasta responsável pelo redirecionamento dns. (ex.: url -> http://localhost/loginPHP-master/user/login.php)
7. Informar as credenciais do banco e o database escolhido no arquivo config.php.
8. Ter conexão com internet 
9. Usar o servidor com o Apache instalado para abrir a página principal login.php.
10. Os arquivos index.html servem de redirecionamento por segurança, alterar a url na tag de meta-dados caso seja necessário.


# Verificação de login.

Com a página de login aberta informar um usuário e uma senha.
- Exemplos de usuário cadastrado no sistema:

   usuário: joaosilva, senha:123, ativo.
 
   usuário: rogerio, senha: abc, inativo.

- Caso seja realizado o login com sucesso a página será redirecionada para página seguro.php

- Caso o login e ou senha estejam incorretos, ou o login esteja inativo, será informado ao usuário erro de autenticação.

- Caso aconteça falha com a conexão com o banco, será informado ao usuário erro ao tentar conectar ao banco.
