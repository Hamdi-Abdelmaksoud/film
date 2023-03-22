<?php
Class Acteur extends Personne{

    private array $castings;
    
    public function __construct($nom, $prenom, $sexe, $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->films=[];
    }
    public function ajouterCasting(Casting $casting)
    {
        $this->castings[]=$casting;
    }
    public function getFilms(){
        foreach($this->castings as $casting){
            echo $casting->getFilm()."<br>";
        }
    }
    public function __toString()
    {
        return $this->getPrenom()."-".$this->getNom();
    }   


}
?>