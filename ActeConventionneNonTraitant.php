<?php
class ActeConventionneNonTraitant extends ActeMedical{

    function __construct() {
        parent:: __construct($nom, $secu, $mutuelle, $remboursement);


    }
}