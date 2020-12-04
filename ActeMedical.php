<?php

abstract class ActeMedical {
    protected $nomPatient;
    protected $numSecu;
    protected $codeMutuelle;
    protected $tauxRemboursement;
    protected $tarif;

    function __construct(string $nom, int $secu, int $mutuelle, string $remboursement, $tarif){
        $this->nomPatient=$nom;
        $this->numSecu=$secu;
        $this->codeMutuelle=$mutuelle;
        $this->tauxRemboursement=$remboursement;
        $this->tarif=$tarif:

    }

    public function prescrire(){

    }

    public function facturer(){

    }
}