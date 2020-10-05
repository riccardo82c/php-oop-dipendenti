<?php

require_once __DIR__ . '/../traits/Credenziali.php';

/* classe Mansione estende dipendente ed aggiunge un traits Credenziali, due variabilii $ruolo, $retribuzioneOraria, amplia il costruttore inserendo $ruolo come parametro*/
class Mansione extends Dipendente {
    use Credenziali;
    private $ruolo;
    private $retribuzioneOraria = 20;
    private $dataCreazione;

    public function __construct($_nome, $_cognome, $_matricola, $_ruolo) {
        parent::__construct($_nome, $_cognome, $_matricola);
        if (empty($_ruolo)) {
            die('Ruolo nn inserito');
        }
        $this->ruolo = $_ruolo;
    }

    /* metodo salario calcola il salario in funzione delle ore lavorative e del ruolo del dipendete */
    public function salario($_oreLavorative) {
        if ($this->ruolo == 'Direttore') {
            $maggiorazioneOraria = 1.8;
        } else if ($this->ruolo == 'Vice_direttore') {
            $maggiorazioneOraria = 1.4;
        } else {
            $maggiorazioneOraria = 1;
        }

        if (is_int($_oreLavorative) || !empty($_oreLavorative)) {
            return $this->retribuzioneOraria * $_oreLavorative * $maggiorazioneOraria;
        } else {
            die('Valore non corretto');
        }

    }

    /* metodo setDataCreazione serve per inserire la data di creazione del profilo */
    public function setDataCreazione($_dataCreazione) {
        $this->dataCreazione = $_dataCreazione;
    }

}