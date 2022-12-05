<?php

class Proizvodjac
{
    public $proizvodjacID;
    public $naziv;
    public $drzavaPorekla;


    public function __construct( $naziv, $drzavaPorekla)
    {
        $this->naziv = $naziv;
        $this->drzavaPorekla = $drzavaPorekla;

    }

    public static function getAll($baza)
    {
        $sql = "SELECT * from proizvodjac";
        $rezultat = mysqli_query($baza, $sql);
        return $rezultat;
    }

    public function addNew($baza)
    {
        $sqlUpit = "INSERT INTO lek(naziv, drzavaPorekla)
      VALUES('$this->naziv', '$this->drzavaPorekla')";
        $rez = mysqli_query($baza, $sqlUpit);
        if ($rez)
            echo "Uspesno unet proizvodjac" . '<br>';
        else
            echo "Greska pri unosu proizvodjaca" . '<br>';

    }

    public static function getById($baza, $proizvodjacID)
    {
        $svi = self::getAll($baza);
        while ($lek = mysqli_fetch_array($svi)) {
            if ($lek['proizvodjacID'] == $proizvodjacID) {
                return $lek;
            }
        }
    }

    public function deleteById($baza, $proizvodjacID)
    {
        $sqlUpit = "DELETE FROM proizvodjac WHERE proizvodjacID = $proizvodjacID";
        $rez = mysqli_query($baza, $sqlUpit);
        if ($rez)
            echo "Uspecno obrisan proizvodjac" . '<br>';
        else
            echo "Greska pri brisanju proizvodjaca" . '<br>';
    }

    // da li postoji proizvodjac
    function postojiLi($baza)
    {
        $rez = self::getAll($baza);
        while ($proizvodjac = mysqli_fetch_array($rez)) {
            if ($proizvodjac['naziv'] == $this->naziv && $proizvodjac['drzavaPorekla'] == $this->drzavaPorekla  )
                return true;
        }

        return false;
    }
}
?>