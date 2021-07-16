<?php

require_once('EmployeModel.php');

class EmployeController {

    private $prenom;

    private $nom;

    private $sexe;

    private $service;

    private $date;

    private $salaire;

    public function __construct($prenom, $nom, $sexe, $service, $date, $salaire){
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setSexe($sexe);
        $this->setService($service);
        $this->setDate($date);
        $this->setSalaire($salaire);
    }

    public function addEmploye(){
        $employeModel = new EmployeModel();
        $employeModel->create($this->prenom, $this->nom, $this->sexe, $this->service, $this->date, $this->salaire);
    }

    public function listEmployes(){
        $employeModel = new EmployeModel();
        return $employeModel->getAll();
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        return $this->prenom = $prenom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        return $this->nom = $nom;
    }

    public function getSexe(){
        return $this->sexe;
    }

    public function setSexe($sexe){
        return $this->sexe = $sexe;
    }

    public function getService(){
        return $this->service;
    }

    public function setService($service){
        return $this->service = $service;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        return $this->date = $date;
    }

    public function getSalaire(){
        return $this->salaire;
    }

    public function setSalaire($salaire){
        return $this->salaire = $salaire;
    }




}



?>