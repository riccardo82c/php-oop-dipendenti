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

        if (empty($_nome)) {
            throw new Exception('Nome mancante <br>');
        }
        $this->nome = $_nome;

        if (empty($_cognome)) {
            throw new Exception('Cognome mancante <br>');
        }
        $this->cognome = $_cognome;

        if (empty($_matricola)) {
            throw new Exception('Matricola mancante <br>');
        }
        $this->matricola = $_matricola;
    }

    /* metodo per settare il nome */
    public function setNome($_nome) {
        if (empty($_nome)) {
            throw new Exception('Nome mancante <br>');
        }
        $this->nome = $_nome;
    }

    /* metodo per settare cognome */
    public function setCognome($_cognome) {
        if (empty($_cognome)) {
            throw new Exception('Cognome mancante <br>');
        }
        $this->cognome = $_cognome;
    }

    /* metodo per sattere matricola */
    public function setMatricola($_matricola) {
        if (empty($_matricola)) {
            throw new Exception('Matricola mancante <br>');
        }
        $this->matricola = $_matricola;
    }

    public function __toString() {
        return 'Impiegato nome: ' . $this->nome .
        '<br> Impiegato cognome: ' . $this->cognome .
        '<br> Matricola: ' . $this->matricola;
    }

}