
<?php
require_once 'Film.php';

require_once 'Personne.php';
require_once 'Realisateur.php';
require_once 'Acteur.php';
require_once 'Role.php';
require_once 'Casting.php';

$realisateur=new Realisateur('Jean','Paul','m','1970');
$acteur=new Acteur('George','Cloonney','m','1960');
$role=new Role('batman',$acteur);

$film=new Film('friends','1993',"2h", $realisateur,"***---***",'drame');
$film=new Film('test','1990',"2h", $realisateur,"***---***",'drame');

 $casting1 = new Casting ($film,$role, $acteur);
 $realisateur->getFilmographie($realisateur);
?>