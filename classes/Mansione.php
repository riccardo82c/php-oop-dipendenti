<?php

require_once __DIR__ . '/../traits/Credenziali.php';

class Mansione extends Dipendente {

    use Credenziali;

    private $ruolo;
    private $retribuzioneOraria = 50;

    public function __construct($_nome, $_cognome, $_matricola, $_ruolo) {
        parent::__construct($_nome, $_cognome, $_matricola);
        if (empty($_ruolo)) {
            die('Ruolo nn inserito');
        }

        $this->ruolo = $_ruolo;
    }

    public function salario($_oreLavorative) {

        if (is_int($_oreLavorative) || !empty($_oreLavorative)) {
            return $this->retribuzioneOraria * $_oreLavorative;
        } else {
            die('Valore non corretto');
        }

    }

    public function setDataCreazione($_dataCreazione) {
        $this->dataCreazione = $_dataCreazione;
    }

}