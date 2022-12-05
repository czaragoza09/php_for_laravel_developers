<?php

namespace Framework\Database;
use PDO;

class Connection
{
    private static $config;

    public static function make($config)
    {
        //static::$config = $config;
        try {
            return new PDO(
                $config['databasetype'] . ':host=' . $config['host'] . ';dbname=' . $config['name'],
                $config['user'],
                $config['password']);
        } catch (\Exception $e) {
            echo "Error de connexió a la base de dades";
        }
    }

}
//   public function __construct($config)
//    {
//        $this->config=$config;
//        $this->connection = Connection::make($config);
//    }
