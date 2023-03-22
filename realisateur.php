<?php

Class Realisateur extends Personne
{
    private array $filmographie;


    public function __constract()
    {
        parent::__constract();
        $this->filmographie=[];
    }
    public function addFilm(Film $film)
    {
        $this->filmographie[]=$film;
    }

    public function getFilmographie(Realisateur $Rea){
        foreach($Rea->filmographie as $film){
            echo "$film<br>";
        }
    }

    public function __toString()
    {
        return $this->getPrenom();
    }   
}
?>


    