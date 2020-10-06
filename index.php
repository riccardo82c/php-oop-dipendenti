<!-- Crea e modella classi, a piacere, per gestire i dipendenti di un’azienda.
Aggiungete 1 trait a piacere -->
<?php

// includo (una volta) Dipendente e Mansione

require_once 'classes/Dipendente.php';
require_once 'classes/Mansione.php';

// creazione dipendenti con Costruttore

try {
    $primoDipendente = new Mansione('Riccardo', 'Colombo', '0001', 'Direttore');
} catch (Exception $e) {
    echo 'Trovata eccezione => ' . $e->getMessage();
}

try {
    $secondoDipendente = new Mansione('Giovanni', 'Airoldi', '0002', 'Vice_direttore');
} catch (Exception $e) {
    echo 'Trovata eccezione => ' . $e->getMessage();
}

// modifica alcuni valori
try {
    $primoDipendente->setNome('Davide');
} catch (Exception $e) {
    echo 'Trovata eccezione => ' . $e->getMessage();
}

try {
    $secondoDipendente->setCognome('Gervasoni');
} catch (Exception $e) {
    echo 'Trovata eccezione => ' . $e->getMessage();
}

// setDataCreazione profilo

$primoDipendente->setDataCreazione('05-10-2020');
$secondoDipendente->setDataCreazione('05-10-2020');

echo $primoDipendente;
echo '<br>';
echo '<br>';
echo $secondoDipendente;
/* var_dump($primoDipendente);
var_dump($secondoDipendente); */

// stampa salari in base alle ore e alla maggiorazioneOraria (definita nel metodo salario)

try {
    $primoDipSalario = $primoDipendente->salario(8);
    var_dump($primoDipSalario);
} catch (Exception $e) {
    echo 'Trovata eccezione => ' . $e->getMessage();
}

try {
    $secondoDipSalario = $secondoDipendente->salario(10);
    var_dump($secondoDipSalario);
} catch (Exception $e) {
    echo 'Trovata eccezione => ' . $e->getMessage();
}

/* set e check credenziali */

// prova accesso consentito
$primoDipendente->setCredenziali('admin', 'admin');
echo $primoDipendente->checkLogin(['admin', 'admin']);

echo '<br>';

// prova accesso negato
$secondoDipendente->setCredenziali('gioair', '1997');
echo $primoDipendente->checkLogin(['gioair', '1998']);
