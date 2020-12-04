<?php
require_once "ActeMedical.php";
require_once "ActeConventionneNonTraitant";
require_once "ActeConventionneTraitant";
require_once "ActeNonConventionne";

$acte1=new ActeNonConventionne("Pierre Patate", 4569852158965, false , 70 );
$acte2=new ActeConventionneTraitant("Roger Mur", 5845632589658, true , 70 );
$acte3=new ActeConventionneNonTraitant("Dak Tirak", 8463259854256, true ,30 );
