<?php
class conexion { 

public static function conexionDB() {

    $host = "127.0.0.1";
    #$port = "5432";
    $dbname = "daysDB";
    $username = "admin";
    $password = "admin";

    try {
            $conn = new PDO("pgsql:host=$host; dbname=$dbname", $username, $password);
            echo ('');
        }catch( PDOexception $exp){
    echo ("Error de conexion a la base de datos, $exp");
}

return $conn;

}
}
?>
