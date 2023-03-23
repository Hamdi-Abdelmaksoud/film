<?php
class Film{
    private string $titre;
    private string $dateSortie;
    private string $duree;
    private Realisateur $realisateur;
    private string $resume;
    private string $genre;
    private array $castings;

    
    public function __construct(string $titre, int $dateSortie, string $duree, realisateur $realisateur, string $resume,string $genre)
    {
        $this->titre=$titre;
        $this->dateSortie=$dateSortie;
        $this->duree=$duree;
        $this->realisateur=$realisateur;
        $this->resume=$resume;
        $this->genre=$genre;
        $this->castings=[];
        //addFilm sur réalisateur
        $this->realisateur->addFilm($this);
        

    }
/*********************************get********************************/
    public function getTitre() {
        return $this->titre;
    }
    public function getdateSortie() {
        return $this->dateSortie;
    }
    public function getduree() {
        return $this->duree;
    }
    
    public function getresume() {
        return $this->resume;
    }
    public function getgenre() {
        return $this->genre;
    }
    public function getcasting() {
        return $this->castings;
    }
    /*********************************set********************************/
    public function setTitre($titre) {
        return $this->titre=$titre;
    }
    public function setdateSortie($dateSortie) {
        return $this->dateSortie=$dateSortie;
    }
    public function setduree($duree) {
        return $this->duree=$duree;
    }
    
    public function setresume($resume) {
        return $this->resume=$resume;
    }
    public function setgenre($genre) {
        return $this->genre=$genre;
    }
    // public function setcasting() {
    //     return $this->castings=$castings;
    // }
/*********************************set********************************/
// public function Castfilm(Film $film)
// {
// foreach($film->castings as $cast)

// {
// echo'$cast <br> ';
// }
// }




/**************************tostring************************/    
public function __toString()
    {
        return "le titre du film : $this->titre <br> date de sortie : $this->dateSortie la durée : $this->duree  <br> réaliser par  $this->realisateur  <br> resumer : $this->resume ";
    }
    public function ajouterCasting(Casting $cast)
    {
        $this->castings[]=$cast;
    }
}


?>
