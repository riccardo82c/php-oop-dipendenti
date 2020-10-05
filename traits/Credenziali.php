<?php
/* Trait credenziali aggiunge una variabile e due metodi*/

trait Credenziali {
    private $credenziali;

    /* setCredenziali serve per settare username e password e salvarle in $credenziali che è un array */
    public function setCredenziali($_usr, $_pwd) {
        $this->credenziali[0] = $_usr;
        $this->credenziali[1] = $_pwd;
    }

    /* checkLogin invece serve per verificare se si hanno i permessi, verificando se i valori inseriti corrispondo a quelli di $credenziali */
    public function checkLogin($_login) {
        if ($_login[0] == $this->credenziali[0] && $_login[1] == $this->credenziali[1]) {
            return ('Accesso Consentito');
        } else {
            return ('Accesso Negato');
        }
    }
}
