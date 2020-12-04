<?php

abstract class ActeMedical implements Transmettre {
    protected $nomPatient;
    protected $numSecu;
    protected $codeMutuelle;
    protected $tauxRemboursement;
    protected $tarif=25;
    

    function __construct(string $nom, int $secu, int $mutuelle, float $remboursement){
        $this->nomPatient=$nom;
        $this->numSecu=$secu;
        $this->codeMutuelle=$mutuelle;
        $this->tauxRemboursement=$remboursement;
    

    }

    public function prescrire():string {
        return "Paracetamol 1000";


    }

    public function facturer(): float{
        return $this->tarif=$tarif;
        
      
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

    function setRemboursement(float $tauxRemboursement){
        $this->remboursement=$tauxRemboursement;
    }
    function getRemboursement(){
        return $this->remboursement;
    }
    function setTarif(float $tarif){
        $this->tarif=$tarif;
    }
    function getTarif(){
        return $this->tarif;
    }
}
?>