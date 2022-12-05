<?php
namespace Framework\Database;

//use App\Models\Task;

use PDO;

class Database
{
    protected $pdo;


    public function __construct($pdo){

        $this->pdo = $pdo;

    }
    public function selectAll($table){

       # $dbh = $this->connection->connectDB();
        $statement = $this->pdo->prepare("SELECT * FROM $table;");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    function insert()
    {
        //TODO
    }
}

/*/
// Task::class
//  private $connection;

public function __construct($config)
{
    $this->config = $config;

    $this->connection = Connection::make($config);
}
/*/
//minut: 1:10:11 canvia uns quants parametres de estructura general
//d'aquest document