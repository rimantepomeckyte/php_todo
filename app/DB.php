<?php


namespace ToDo;

use PDO;

//biblioteka- saugi. skirta netik msql, galim ir su oracle

class DB
{
    private static $connections = 'mysql:host=127.0.0.1'; //arba localhost rasyti
    private static $user = 'root';
    private static $password = '';
    private static $database = 'to_do_list';
    private static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ];//kad ijungtu error mode

    public static function connect()
    {
        try { //su try bandom jungtis

          return $pdo= new PDO(self::$connections .';dbname=' .self::$database,
              self::$user,
              self::$password,
              self::$options);

            /*return new PDO(
                self::$connections . ';dbname =' . self::$database, // .';charset=utf8mb4', (vietoj kablelio)
                self::$user,
                self::$password,
                self::$options
            );*/
        } catch (PDOException $e) {//jei nepavyksta pagauna klaida
            die($e->getMessage());
        }
    }
}