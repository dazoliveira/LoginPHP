<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database()
{
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $conn->set_charset("utf8");
        return $conn;
        
    }
    catch (Exception $e) {
        $_SESSION['message'] = "Erro ao tentar conectar ao banco";
        $_SESSION['type']    = 'danger';
        return null;
    }
}

function close_database($conn)
{
    try {
        
        if (!$conn == null)
            mysqli_close($conn);
        
    }
    catch (Exception $e) {
        $_SESSION['message'] = "Erro ao tentar fechar o banco";
        $_SESSION['type']    = 'danger';
    }
}

//Pesquisa um Resgistro pelo usuario em uma tabela
function find($table = null, $user = null)
{
    
    $database = open_database();
    $found    = null;
    
    try {
        
        if ($user && !$database == null) {
            
            $sql = "SELECT * FROM " . $table . " WHERE user = " . "'" . $user . "'" . " AND active = 1";
            
            $result = $database->query($sql);
            
            
            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
            
        }
        
    }
    catch (Exception $e) {
        session_start();
        $_SESSION['message'] = "Erro ao tentar buscar usuario";
        $_SESSION['type']    = 'danger';
    }
    
    close_database($database);
    return $found;
}

?>