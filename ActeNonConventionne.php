<?php
class ActeNonConventionne extends ActeMedical{

    private $honorairesSupp=40;


    function __construct(string $nom=, int $secu, int $mutuelle, $remboursement=0.7) {
        parent:: __construct($nom, $secu, $mutuelle, $remboursement);

    }

    public function facturer(){
        return $this->tarif+$this->honoraires;
    }
    public function dispenseAvanceFrais():float{

        return  $this->tarif-$this->tarif*$this->remboursement+ $this->honoraires;
    }


    function setHonoraires(string $honorairesSupp){
        $this->honoraires=$honorairesSupp;
    }
    function getHonoraires(){
        return $this->honoraires;
    }
}
?>