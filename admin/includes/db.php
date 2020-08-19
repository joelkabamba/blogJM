<?php
/*
class database{

    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $db_name = DB_NAME;

    public $link;
    public $error;

    public function __construct(){

        $this->connect();
    }

    private function connect(){

        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        if(!$this->link){
            $this->error = "Connection error". $this->link->connect_error;
        }
    }

    public function  select ($query){

        $result = $this->link->query($query);

        if($result->num_rows > 0)
            return $result;
        return false;
    }

    public function insert ($query){

        $insert = $this->link->query($query);

        if($insert){
            header('location:index.php?insert= Post inserer...');
        }
        else{
            echo "Il n'est pas inserer <br>";
        }
    }   

    public function update($query){

        $update = $this->link->query($query);

        if($update){
            header('location:index.php?insert= Post modifier...');
        }
        else{
            echo "Il n'est pas modifier";
        }
    }

    public function delete($query){

        $delete = $this->link->query($query);

        if($delete){
            header('location:index.php?insert= Post supprimer...');
        }
        else{
            echo "Il n'est pas supprimer";
        }
    }
}
*/
?>