<!-- Crea e modella classi, a piacere, per gestire i dipendenti di un’azienda.
Aggiungete 1 trait a piacere -->
<?php

// includo (una volta) Dipendente e Mansione

require_once 'classes/Dipendente.php';
require_once 'classes/Mansione.php';

// creazione dipendenti con Costruttore

$primoDipendente = new Mansione('Riccardo', 'Colombo', '0001', 'Direttore');
$secondoDipendente = new Mansione('Giovanni', 'Airoldi', '0002', 'Vice_direttore');

// modifica alcuni valori

$primoDipendente->setNome('Davide');

$secondoDipendente->setCognome('Gervasoni');

// setDataCreazione profilo

$primoDipendente->setDataCreazione('05-10-2020');
$secondoDipendente->setDataCreazione('05-10-2020');

var_dump($primoDipendente);
var_dump($secondoDipendente);

// stampa salari in base alle ore e alla maggiorazioneOraria (definita nel metodo salario)

$primoDipSalario = $primoDipendente->salario(10);

var_dump($primoDipSalario);

$secondoDipSalario = $secondoDipendente->salario(10);

var_dump($secondoDipSalario);

/* set e check credenziali */

// prova accesso consentito
$primoDipendente->setCredenziali('admin', 'admin');
echo $primoDipendente->checkLogin(['admin', 'admin']);

echo '<br>';

// prova accesso negato
$secondoDipendente->setCredenziali('gioair', '1997');
echo $primoDipendente->checkLogin(['gioair', '1998']);
