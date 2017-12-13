<?php

require_once('../config.php');
require_once(DBAPI);

$usuarios = null;

/**         *  busca de um usuarios         */
function login($user = null)
{
    global $usuarios;
    $usuarios = find('users', $user);
}