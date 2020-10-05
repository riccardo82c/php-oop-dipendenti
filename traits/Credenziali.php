<?php

trait Credenziali {
    private $dataCreazione;
    private $credenziali;

    public function setCredenziali($_usr, $_pwd) {
        $this->credenziali[0] = $_usr;
        $this->credenziali[1] = $_pwd;
    }

    public function checkLogin($_login) {
        if ($_login[0] == $this->credenziali[0] && $_login[1] == $this->credenziali[1]) {
            return ('Accesso Consentito');
        } else {
            return ('Accesso Negato');
        }
    }

}
