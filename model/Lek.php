<?php

class Lek
{
public $sifraNabavke;
public $sifra;
public $kolicina;
public $id;
public $datum;


public function __construct($sifra,$kolicina,$id,$datum){
    
    $this->sifra=$sifra;
    $this->kolicina=$kolicina;
    $this->id=$id;
    $this->datum=$datum;
}  

}
?>