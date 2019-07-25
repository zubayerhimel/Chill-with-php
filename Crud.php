<?php

    include_once "DatabaseConfiguration.php";

    class Crud extends DatabaseConfiguration{

        public function __construct(){
            parent::__construct();
        }

        // receives query to get data from the database 
        public function getData($query){
            $result = $this->connection->query($query);
            if(!$result){
                return false;
            }

            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        // receives query to input data to the database
        public function execute($query){
            $result = $this->connection->query($query);
            if($result == false){
                return false;
            }
            else{
                return true;
            }
        }

        //receives id and table name to delete a data from the table
        public function delete($id, $table_name){
            $query = "delete from $table_name where id = $id";

            $result = $this->connection->query($query);
            if($result == false){
                return false;
            }
            else{
                return true;
            }
        }
    }
?>