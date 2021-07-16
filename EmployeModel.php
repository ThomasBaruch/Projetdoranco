<?php

require_once('Database.php');

class EmployeModel {

    private $connexion;

    public function __construct(){
        $database = new Database();
        $this->connexion = $database->getPDO();

    }


    public function getAll(){
        $request = $this->connexion->prepare('SELECT * FROM employes');

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function update(){

    }

    public function delete(){
        
    }

}




?>