<!-- Crea e modella classi, a piacere, per gestire i dipendenti di un’azienda.
Aggiungete 1 trait a piacere -->
<?php

require_once 'classes/Dipendente.php';
require_once 'classes/Mansione.php';

$primoDipendente = new Mansione('Riccardo', 'Colombo', '0001', 'Direttore');
$secondoDipendente = new Mansione('Giovanni', 'Airoldi', '0002', 'Vice_direttore');

$primoDipendente->setNome('Davide');

$secondoDipendente->setCognome('Gervasoni');

var_dump($primoDipendente);
var_dump($secondoDipendente);

/* $primoDipSalario = $primoDipendente->salario(''); */

/* var_dump($primoDipSalario); */

/* check credenziali */

$primoDipendente->setCredenziali('dd', 'admin');
echo $primoDipendente->checkLogin(['admin', 'admin']);
