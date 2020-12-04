<?php
interface Transmettre {

    public function dispenseAvanceFrais(){

        dispenseAvanceFrais()=$this->tarif+ $this->honoraires + $this->remboursement;


    };
}