<?php

class Company{
  public $name;
  public $location;
  public $tot_employees = 0;
  public static $avg_wage = 1500;
  static public $totale;


  public function __construct($name,$location,$tot_employees = 0,$avg_wage = 1500){
    $this->name = $name;
    $this->location = $location;
    $this->tot_employees = $tot_employees;
   


    
    if($tot_employees <= 0){
        echo( "l'ufficio" . " " . $name . " " . "con sede in" . " " . $location . " " . "non ha dipendenti" ."\n");
    } else{
        echo("l'ufficio" . " " . $name . " " . "con sede in" . " " . $location . " " . "ha ben" . " " . $tot_employees . " " . "dipendenti" ."\n");
    }
    
    echo ("salario annuale per ogni dipendente:" . " " . $avg_wage * 12) ."\n";
    
  }

 public function spesaannuale()
  {
    
    return $this->tot_employees * self::$avg_wage * 12 . "\n";
  }

 public function spesafinoadundatomese($months)
 {
    echo("spesa azienda verso i dipendenti per" . " " . $months . " " . "mesi:");
    return  $this->tot_employees * self::$avg_wage * $months . "\n";
 }

 public function totale(){
   
    self::$totale += $this->spesaannuale();
 }

}




 

$Aulab = new Company("Aulab","Italia",55);
$Nintendo = new Company("Nintendo","Giappone",257);
$Amazon = new Company("Amazon", "America", 468);
$Nike = new Company("Nike","Stati Uniti",346);
$Ebay = new Company("Ebay","Stati Uniti",105);




echo $Aulab->spesaannuale();
echo $Nintendo->spesaannuale();
echo $Amazon->spesaannuale();
echo $Nike->spesaannuale();
echo $Ebay->spesaannuale();




$months = (int) readline("inserisci il numero di mesi");
echo $Aulab ->spesafinoadundatomese($months);
echo $Nintendo ->spesafinoadundatomese($months);
echo $Amazon ->spesafinoadundatomese($months);
echo $Nike ->spesafinoadundatomese($months);
echo $Ebay ->spesafinoadundatomese($months);


$Aulab->totale();
$Nintendo->totale();
$Amazon->totale();
$Nike->totale();
$Ebay->totale();

echo Company::$totale;