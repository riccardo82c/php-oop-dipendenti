<?php

class Dipendente {
    private $nome;
    private $cognome;
    private $matricola;
    private $CF;
    private $assunzione;

    public function __construct($_nome, $_cognome, $_matricola) {
        if (empty($_nome) || empty($_cognome) || empty($_matricola)) {
            die('dati mancanti');
        }

        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->matricola = $_matricola;
    }

    public function setNome($_nome) {
        if (empty($_nome)) {
            die('Nome non può esser vuoto');
        }
        $this->nome = $_nome;
    }

    public function setMatricola($_cognome) {
        if (empty($_cognome)) {
            die('Cognome non può esser vuoto');
        }
        $this->cognome = $_cognome;
    }

    public function setCognome($_matricola) {
        if (empty($_matricola)) {
            die('Matricola non può esser vuoto');
        }
        $this->matricola = $_matricola;
    }

}