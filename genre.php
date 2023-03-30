<?php
    class Genre
    {
        private string $type;
        private array $listeTitreFilms=[];

        public function __construct(string $type)
        {
            $this->type=$type;
        }
        public function getType()
        {
            return $this->type;
        }
        public function setType(string $type)
        {
            $this->type=$type;
        }
        public function getlisteTitreFilms()
        {
            return $this->listeTitreFilms;
        }
        public function setlisteTitreFilms(array $listeTitreFilms)
        {
            $this->listeTitreFilms=$listeTitreFilms;
        }
        
        public function __toString()
        {
            return $this->type;
        }
        public function ajouterTitreFilm( $titreFilm)
        {
            $this->listeTitreFilms[]=$titreFilm;
        }
        public function afficheListeDeGenre()
        {
            $resultat=$this->type." :" ;
                foreach($this->listeTitreFilms as $titreFilm)
                {
                    $resultat.="$titreFilm--";
                } 
                
                return $resultat;
        }
    }
    ?>