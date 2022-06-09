<?php
require_once 'Compte.php';
class ComptePayant extends Compte
{

    private static float $TauxRetrait=2;



    public function retirer(float $montant):float

    {

        if($montant > 0 && $this->solde >= ($montant+2)){

           return $this->solde -= ($montant+2);

        }else{

           echo "Montant invalide ou solde insuffisant";

        }

   

}

}

$compte3=new ComptePayant(100);
echo $compte3->retirer(28);



