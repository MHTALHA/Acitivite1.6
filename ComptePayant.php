<?php
require_once 'Compte.php';
class ComptePayant extends Compte
{

    private  const  TAUX_RETRAIT=2;

  

    public function retirer(float $montant)

    {

        if($montant > 0 && $this->solde >= ($montant+self::TAUX_RETRAIT)){

           return $this->solde -= ($montant+self::TAUX_RETRAIT);

        }else{

           echo "Montant invalide ou solde insuffisant";

        }

   

}

}

$compte3=new ComptePayant(100);
echo $compte3->retirer(50);




