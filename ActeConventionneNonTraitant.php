<?php
class ActeConventionneNonTraitant extends ActeMedical{

    function __construct(string $nom=, int $secu, int $mutuelle, float $remboursement=0.4) {
        parent:: __construct($nom, $secu, $mutuelle, $remboursement);


    }
    public function facturer(){
        $this->tarif=$tarif;
    }
}