<?php
require_once('Compte.php');
class CompteEpargne extends Compte
{
    private const  TAUT_INTERET=0.06;

public function calculInteret():float{

       return  $this->solde=$this->solde*(1+self::TAUT_INTERET);
}

}
// $compte3=new CompteEpargne(100);
// echo $compte3->calculInteret();