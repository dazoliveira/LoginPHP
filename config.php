<?php

//informar o nome do database
define('DB_NAME', '????');

//informar o nome do usuario do banco
define('DB_USER', '????');

//informar a senha do banco
define('DB_PASSWORD', '????');

//informar o servidor do banco
define('DB_HOST', 'localhost');

//caminho absoluto para a pasta do sistema
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

//caminho no server para o sistema
if (!defined('BASEURL'))
    define('BASEURL', '/loginPHP/');

//caminho no arquivo de banco de dados
if (!defined('DBAPI'))
    define('DBAPI', ABSPATH . 'inc/database.php');

// define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');        
// define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

?>