<?php
class ActeConventionneTraitant extends ActeMedical{

    function __construct((string $nom="Patate", int $secu=123456789654, string $mutuelle="LJY159654", float $remboursement=0.7, int $tarif) {
        parent:: __construct($nom, $secu, $mutuelle, $remboursement, $tarif);


    }
    public function facturer(int $tarif){
        $this->tarif=$tarif;
    }
}