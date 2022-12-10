<?php

class Lek
{
    public $lekId;
    public $naziv;
    public $godinaVazenja;
    public $cena;
    public $proizvodjacID;


    public function __construct($naziv, $godinaVazenja, $cena, $proizvodjacID)
    {
        $this->naziv = $naziv;
        $this->godinaVazenja = $godinaVazenja;
        $this->cena = $cena;
        $this->proizvodjacID = $proizvodjacID;

    }

    public static function getAll($baza)
    {
        $sql = "SELECT * from lek";
        $rezultat = mysqli_query($baza, $sql);
        return $rezultat;
    }

    public function addNew($baza)
    {
        $sqlUpit = "INSERT INTO lek(naziv, godinaVazenja,cena, proizvodjacID)
      VALUES('$this->naziv', '$this->godinaVazenja', '$this->cena', '$this->proizvodjacID')";
        $rez = mysqli_query($baza, $sqlUpit);
        if ($rez)
            echo "Uspesno unet lek" . '<br>';
        else
            echo "Greska pri unosu leka" . '<br>';

    }

    public static function getById($baza, $lekID)
    {
        $svi = self::getAll($baza);
        while ($lek = mysqli_fetch_array($svi)) {
            if ($lek['lekID'] == $lekID) {
                return $lek;
            }
        }
    }

    public static function deleteById($baza, $lekID)
    {
        $sqlUpit = "DELETE FROM lek WHERE lekID = $lekID";
        $rez = mysqli_query($baza, $sqlUpit);
        if ($rez)
            echo "Uspesno obrisan lek" . '<br>';
        else
            echo "Greska pri brisanju leka" . '<br>';
    }


    // da li postoji lek
    function postojiLi($baza)
    {
        $rez = self::getAll($baza);
        while ($lek = mysqli_fetch_array($rez)) {
            if ($lek['naziv'] == $this->naziv )
                return true;
        }

        return false;
    }
    // VRACAM ID ZA LEK
     static function vratiIDLeka($baza)
     {
        $rez = self::getAll($baza);
        while($lek = mysqli_fetch_array($rez))
        {
          if($lek['ime'] == $naziv )
              return $lek['lekID'];
        }

        return false;
     }



}
?>