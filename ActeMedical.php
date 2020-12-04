<?php

abstract class ActeMedical {
    protected $nomPatient;
    protected $numSecu;
    protected $codeMutuelle;
    protected $tauxRemboursement;
    protected $tarif;

    function __construct(string $nom, int $secu, int $mutuelle, float $remboursement, int $tarif=25){
        $this->nomPatient=$nom;
        $this->numSecu=$secu;
        $this->codeMutuelle=$mutuelle;
        $this->tauxRemboursement=$remboursement;
        $this->tarif=$tarif;

    }

    public function prescrire(){


    }



    public function facturer(int $tarif){
    
        
    }

    
    
    function setNom(string $nomPatient){
        $this->nom=$nomPatient;
    }
    function getNom(){
        return $this->nom;
    }

    function setSecu(int $numSecu){
        $this->secu=$numSecu;
    }
    function getSecu(){
        return $this->secu;
    }

    function setMutuelle(int $codeMutuelle){
        $this->mutuelle=$codeMutuelle;
    }
    function getMutuelle() {
        return $this->mutuelle;
    }

    function setRemboursement(int $tauxRembousement){
        $this->remboursement=$tauxRemboursement;
    }
    function getRemboursement(){
        return $this->remboursement;
    }
}