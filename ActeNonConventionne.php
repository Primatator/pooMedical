<?php
class ActeNonConventionne extends ActeMedical{

    function __construct() {
        parent:: __construct($nom, $secu, $mutuelle, $remboursement, $tarif);

    }
    private function honorairesSupp(){

    }
    public function facturer(int $tarif){
        $this->tarif;
    }
}