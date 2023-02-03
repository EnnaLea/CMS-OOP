<?php

require_once("new_config.php");

class Database{

    public $connection;

// automatic connection to database method
    function __construct(){
        $this->open_db_connection();

    }


// connection to database method
public function open_db_connection(){


// $this->connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS, DB_NAME,DB_PORT);

// more oop connection
        $this->connection = new mysqli(DB_HOST, DB_USER,DB_PASS, DB_NAME,DB_PORT);

if($this->connection->connect_errno){
            die("Database connection failed!" . $this->connection->connect_error);
}

}


// query method
public function query($sql){
        $result = $this->connection->query($sql);

        $this->confirm_query($result);

        return $result;
}

// method to confirm query
private function confirm_query($result){
        if(!$result){
            die("Query failed!" . $this->connection->error);
        }
}

// to escape string
public function escape_string($string){
        $escapade_string = $this->connection->real_escape_string($string);

        return $escapade_string;

}

// function to assign the last id in the query created at the object
public function the_insert_id(){                
        return mysqli_insert_id($this->connection);

}


// function to insert ids
// public function mysqli_insert_id(){
//         return $this->connection->insert_id;
// }


}

$database = new Database();





?>