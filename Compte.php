<?php
declare(strict_types=1);
class Compte {
        private static int $nbCompte=0;
        private int $code=0;
        protected float $solde=0;
        private const UNITE = "€";

    public function __construct(float $solde)
        {     
             $this->code =++self::$nbCompte;
             $this->solde= $solde;
        }
   
        //  public function getcode(){
        //      return self::$nbCompte;
        //  }

public function  deposer(float $newSolde):float{
    return $this->solde=$newSolde+$this->solde;
}
public function retirer(float $newSolde){
  return $this->solde=$this->solde-$newSolde;
}
public function consulterSolde(){
    $sld=number_format($this->solde,2,',',' ');
   echo "votre solde est :".$sld.' '.self::UNITE;
}


}

// $compte1=new Compte(50000);
// $compte2=new Compte(50.5);
// echo $compte1->deposer(10);
// $compte1->consulterSolde();
// echo $compte1->retirer(10);


//$compte4=new ComptePayant(50000);

