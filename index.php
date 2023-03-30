
<?php
require_once 'Film.php';
require_once 'Genre.php';
require_once 'Personne.php';
require_once 'Realisateur.php';
require_once 'Acteur.php';
require_once 'Role.php';
require_once 'Casting.php';

$realisateur=new Realisateur('Jean','Paul','m','1970');
$acteur=new Acteur('George','Cloonney','m','1960');
$acteur1=new Acteur('David','Shwimmer','m','1966');
$acteur1=new Acteur('leo','andre','m','1970');
$role=new Role('batman');

$genre=new Genre("Action");
$film=new Film('friends','1993',"2h", $realisateur,"***---***",$genre);

$film1=new Film('test','1990',"2h", $realisateur,"***---***",$genre);

$casting1 = new Casting ($film,$role, $acteur);
 
$rol5=new Role('Ross');
$casting6 = new Casting ($film,$rol5, $acteur1);
$realisateur->getFilmographie();
 echo $acteur->getFilms();
 echo $role->roleActeurs();
 echo $genre->afficheListeDeGenre();
echo $film->castFilm();

?>