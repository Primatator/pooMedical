<?php

require_once "Transmettre.php";
require_once "ActeMedical.php";
require_once "ActeConventionneNonTraitant.php";
require_once "ActeConventionneTraitant.php";
require_once "ActeNonConventionne.php";



$acte1=new ActeConventionneTraitant();
$acte2=new ActeConventionneNonTraitant();
$acte3=new ActeNonConventionne();

echo "Facture acte parcours soin " . $acte1->facturer() . " €<br>";
echo "Facture acte hors parcours " . $acte2->facturer() . " €<br>";
echo "Facture acte non conventionne " . $acte3->facturer() . " €<br>";
​
echo "Facture (dispense avance frais) acte parcours soin " . $acte1->dispenseAvanceFrais() . " €<br>";
echo "Facture (dispense avance frais) acte hors parcours " . $acte2->dispenseAvanceFrais() . " €<br>";
echo "Facture (dispense avance frais) acte non conventionne " . $acte3->dispenseAvanceFrais() . " €<br>";
