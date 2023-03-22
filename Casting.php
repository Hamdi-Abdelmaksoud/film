<?php
Class Casting {
    private Film  $film;
    private Role  $role;
    private Acteur $acteur;
    
    public function __construct(Film $film,Role $role,acteur $acteur)
    {
        $this->film=$film;
        $this->role=$role;
        $this->acteur=$acteur;
        $this->film->ajouterCasting($this);
        //addfilm sur acteur
         $this->acteur->ajouterCasting($this);
       
    }
   

} 
?>