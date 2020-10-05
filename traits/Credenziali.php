<?php

trait Credenziali {
    private $dataCreazione;
    private $login;

    public function checkLogin($_login) {
        if ($_login[0] == 'admin' && $_login[1] == 'admin') {
            return ('Accesso Consentito');
        } else {
            return ('Accesso Negato');
        }
    }

}
