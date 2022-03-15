<?php

class Movie {
    public $genere;
    public $durata;
    public $titolo;
    public $voto;

    public function __construct($genere, $titolo) {
        $this->genere = $genere;
        $this->titolo = $titolo;
    }
}

$batman = new Movie('Azione','Il Cavaliere Oscuro:');
echo 'Titolo=> ' . $batman -> titolo . ' Genere=>' . $batman-> genere;