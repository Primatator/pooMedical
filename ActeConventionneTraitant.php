<?php
class ActeConventionneTraitant extends ActeMedical{

    function __construct() {
        parent:: __construct($nom, $secu, $mutuelle, $remboursement);


    }
}