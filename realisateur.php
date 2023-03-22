<?php

Class Realisateur extends Personne
{
    private array $filmographie;


    public function __construct($nom, $prenom, $sexe, $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->filmographie=[];
    }
    public function addFilm(Film $film)
    {
        $this->filmographie[]=$film;
    }

    public function getFilmographie(){
        foreach($this->filmographie as $film){
            echo "$film<br>";
        }
    }

    public function __toString()
    {
        return $this->getPrenom()."-".$this->getNom();
    }   
}
?>


    