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

    public function setVoto($voto) {

        if (is_numeric($voto) && $voto > 0) {
            $this->voto = $voto;
        } else {
            echo "Devi inserire un numero!";
        }
    }
}

$batman = new Movie('Azione:','Il Cavaliere Oscuro:');
$batman->setVoto(10);
echo 'Titolo = ' . $batman -> titolo . ' Genere = ' . $batman-> genere;
echo 'Voto = '. $batman->voto;