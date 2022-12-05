<?php
namespace Framework\Database;

use App\Models\Task;
use PDO;

class Database
{
    private static $dbh;


    public static function make($connection){

        static::$dbh = $connection;
        return ;

    }
    public function selectAll($table){

       # $dbh = $this->connection->connectDB();
        $statement = static::$dbh->prepare("SELECT * FROM $table;");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, Task::class);

    }

    function insert()
    {
        //TODO
    }
}

/*/
//  private $connection;

public function __construct($config)
{
    $this->config = $config;

    $this->connection = Connection::make($config);
}
/*/
//minut: 1:10:11 canvia uns quants parametres de estructura general
//d'aquest document