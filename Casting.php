<?php
Class Casting {
    private Film  $film;
    private Role  $roles;
    private Acteur $acteur;
    
    public function __construct(Film $film,Role $roles,acteur $acteur)
    {
        $this->film=$film;
        $this->roles=$roles;
        $this->acteur=$acteur;
        $this->film->ajouterCasting($this);
      
         $this->acteur->ajouterCasting($this);
         $this->roles->ajouterRole($this->acteur);
       
    }
    public function getFilm(){
        return $this->film;
    }
    public function setFilm($film){
        return $this->film=$film;
    }
    public function getRoles(){
        return $this->roles;
    }
    public function setRoles($roles){
        return $this->film=$roles;
    }
    public function getActeur(){
        return $this->acteur;
    }
    public function setActeur($acteur){
        return $this->film=$acteur;
    }
public function __toString()
{
    return $this->film->getTitre().",".$this->roles->getRol();
}
} 
?>