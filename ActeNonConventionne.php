<?php
class ActeNonConventionne extends ActeMedical{

    private $honorairesSupp;


    function __construct(string $nom=, int $secu, int $mutuelle, float $remboursement=0.7) {
        parent:: __construct($nom, $secu, $mutuelle, $remboursement);

    }

    public function facturer(){
        $this->tarif=$tarif+$honorairesSupp;
    }

    function setHonoraires(string $honorairesSupp){
        $this->honoraires=$honorairesSupp;
    }
    function getHonoraires(){
        return $this->honoraires;
    }
}