<?php
class ActeConventionneTraitant extends ActeMedical{

    function __construct((string $nom=, int $secu, int $mutuelle, float $remboursement=0.7) {
        parent:: __construct($nom, $secu, $mutuelle, $remboursement);


    }
    public function facturer(){
        $this->tarif=$tarif;
    }
    public function dispenseAvanceFrais():float{

        return $this->tarif-$this->tarif*$this->remboursement;
    }

}
?>