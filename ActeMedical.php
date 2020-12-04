<?php

abstract class ActeMedical {
    protected $nomPatient;
    protected $numSecu;
    protected $codeMutuelle;
    protected $tauxRemboursement;
    protected $tarif;

    function __construct(string $nom, int $secu, bool $mutuelle, string $remboursement, int $tarif=25){
        $this->nomPatient=$nom;
        $this->numSecu=$secu;
        $this->codeMutuelle=true;
        $this->tauxRemboursement=$remboursement;
        $this->tarif=$tarif:

    }

    public function prescrire(){
        if($this->mutuelle)


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

    function setMutuelle(bool $codeMutuelle){
        $this->mutuelle=$codeMutuelle;
    }
    function isMutuelle(): ?bool {
        return $this->mutuelle;
    }

    function setRemboursement(int $tauxRembousement){
        $this->remboursement=$tauxRemboursement;
    }
    function getRemboursement(){
        return $this->remboursement;
    }
}