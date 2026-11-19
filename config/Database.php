<?php
class Database
{
    private static $conn;

    public static function conectar()
    {
        if(!self::$conn){
            self::$conn = new PDO(
                "pgsql:host=192.168.10.38;port=5432;dbname=crud_personagem",
                "personagem",
                "personagem",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }
        return self::$conn;
    }
}
?>