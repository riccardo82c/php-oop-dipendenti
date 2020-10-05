<?php

class Mansione extends Dipendente {
    private $ruolo;
    private $retribuzioneOraria;

    public function __construct($_nome, $_cognome, $_matricola, $_ruolo) {
        parent::__construct($_nome, $_cognome, $_matricola);

        if (empty($_ruolo)) {
            die('Ruolo nn inserito');
        }

        $this->ruolo = $_ruolo;

    }

}