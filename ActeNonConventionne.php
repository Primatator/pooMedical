<?php
class ActeNonConventionne extends ActeMedical{

    private $honorairesSupp=float 40;


    function __construct(float $honorairesSupp=40, string $nom="Mur", int $secu=153685426841, string $mutuelle="4254DH98624", float $remboursement=0.7, int $tarif) {
        parent:: __construct($nom, $secu, $mutuelle, $remboursement, $tarif);

    }

    public function facturer(int $tarif){
        $this->tarif=$tarif+$honorairesSupp;
    }

    function setHonoraires(string $honorairesSupp){
        $this->honoraires=$honorairesSupp;
    }
    function getHonoraires(){
        return $this->honoraires;
    }
}