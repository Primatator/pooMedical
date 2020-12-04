<?php
class ActeConventionneNonTraitant extends ActeMedical{

    function __construct(string $nom="Dak Tirak", int $secu=123456985265, int $mutuelle=465862, float $remboursement=0.4, int $tarif) {
        parent:: __construct($nom, $secu, $mutuelle, $remboursement, $tarif);


    }
    public function facturer(int $tarif){
        $this->tarif=$tarif;
    }
}