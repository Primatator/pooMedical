<?php

abstract class ActeMedical {
    protected $nomPatient;
    protected $numSecu;
    protected $codeMutuelle;
    protected $tauxRemboursement;

    function __construct(string $nom, int $secu, int $mutuelle, string $remboursement){
        $this->nomPatient=$nom;
        $this->numSecu=$secu;
        $this->codeMutuelle=$mutuelle;
        $this->tauxRemboursement=$remboursement;

    }

    function prescrire(){

    }

    function facturer(){
        
    }
}