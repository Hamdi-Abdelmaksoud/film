<?php


class Personne{
    private string $nom;
    private string $prenom;
    private string $sexe;
    private  string $dateNaissance;

    
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->sexe=$sexe;
        $this->dateNaissance=$dateNaissance;
    }
/*********************************get********************************/
    public function getNom() {
        return $this->nom;
    }
    public function getprenom() {
        return $this->prenom;
    }
    public function getsexe() {
        return $this->sexe;
    }
    
    public function getdateNaissance() {
        return $this->dateNaissance;
    }
   
    /*********************************set********************************/
    public function setNom() {
        return $this->nom=$nom;
    }
    public function setprenom() {
        return $this->prenom=$prenom;
    }
    public function setsexe() {
        return $this->sexe=$sexe;
    }
    
    public function setdateNaissance() {
        return $this->dateNaissance=$dateNaissance;
    }
   
/*********************************st********************************/
}
?>
