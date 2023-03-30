<?php
class Role{
    private string $rol;
    private array $acteurs=[];

public function __construct(string $rol)
{
    $this->rol=$rol;
}
public function getRol(){
    return $this->rol;
}
public function ajouterRole(Acteur $acteur)
{
    $this->acteurs[]=$acteur;
}
public function getActeur(){
    return $this->acteurs;
}


/*************************les acteurs qui ont joué ce role*********************************************/
public function roleActeurs(){
 $resultat="Les acteurs qui ont joué le role de ". $this->rol." : <br>";
 foreach($this->acteurs as $acteur)
 {
$resultat.="-$acteur <br>";
}
return $resultat;
}
public function __toString()
{
    return $this->rol;
}
}


?>