<?php

/* classe generale Dipendente */
class Dipendente {
    private $nome;
    private $cognome;
    private $matricola;
    private $CF;
    private $assunzione;

    /* costruttore classe Dipendente*/
    public function __construct($_nome, $_cognome, $_matricola) {
        if (empty($_nome) || empty($_cognome) || empty($_matricola)) {
            die('dati mancanti');
        }

        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->matricola = $_matricola;
    }

    /* metodo per settare il nome */
    public function setNome($_nome) {
        if (empty($_nome)) {
            die('Nome non può esser vuoto');
        }
        $this->nome = $_nome;
    }

    /* metodo per settare cognome */
    public function setCognome($_cognome) {
        if (empty($_cognome)) {
            die('Cognome non può esser vuoto');
        }
        $this->cognome = $_cognome;
    }

    /* metodo per sattere matricola */
    public function setMatricola($_matricola) {
        if (empty($_matricola)) {
            die('Matricola non può esser vuoto');
        }
        $this->matricola = $_matricola;
    }

}