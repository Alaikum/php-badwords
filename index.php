<?php
$text = 'Un elefante si dondolava. 
Sopra al filo di una ragnatela.
E ritenendo il gioco interessante.
Andò a chiamare un altro elefante.
Due elefanti si dondolavano.
Sopra al filo di una ragnatela.
E ritenendo il gioco interessante.
Andarono a chiamare un altro elefante.
Tre elefanti si dondolavano.
Sopra al filo di una ragnatela.
E ritenendo il gioco interessante.
Andarono a chiamare un altro elefante.
Quattro elefanti si dondolavano.
Sopra al filo di una ragnatela.
E ritenendo il gioco interessante.
Andarono a chiamare un altro elefante.
Cinque elefanti si dondolavano.
Sopra al filo di una ragnatela.
E ritenendo il gioco interessante.
Andarono a chiamare un altro elefante.
Sei elefanti si dondolavano.
Sopra al filo di una ragnatela.
E ritenendo il gioco interessante.
Andarono a chiamare un altro elefante.
Sette elefanti si dondolavano.
Sopra al filo di una ragnatela.
E ritenendo il gioco interessante.
Andarono a chiamare un altro elefante.
Otto elefanti si dondolavano.
Sopra al filo di una ragnatela.
E ritenendo il gioco interessante.
Andarono a chiamare un altro elefante.
Nove elefanti si dondolavano.
Sopra al filo di una ragnatela.
E ritenendo il gioco interessante.
Andarono a chiamare un altro elefante.
Dieci elefanti si dondolavano.
Sopra al filo di una ragnatela.
E ritenendo il gioco interessante.
Andarono a chiamare un altro elefante.';


$lunghezza = strlen($text);
$caratteri = explode(' ', $text);

// parametro passato con get 
$censura = $_GET['censura'];

$nuovoTesto = str_replace($censura, '***', $text, $count);

$nuovaLughezza = strlen($nuovoTesto);



?>



<div>
    <h1>Ecco il primo esercizio con PHP</h1>
    <h2>Qui troverai un testo da censurare</h2>
    <p><?= $text ?></p>
    <p>Il test è lungo <?= $lunghezza ?> battute.</p>
    <p>Per censurare il testo aggiungi <span> ?censura=<i>parola da censurare</i> </span></p>
    <h2>Qui il testo censurato</h2>
    <p><?= $nuovoTesto ?></p>
    <p>Il testo censurato è lungo <?= $nuovaLughezza ?></p>
    <p>La parola censurata è <span> <?= $censura ?></span></p>


</div>

<style>
    body{
        background-color: lightgray;
    }
    div {
        text-align: center;
        max-width: 1200px;
        margin: 0 auto;
        background-color: beige;
        border-radius: 25px;
        box-shadow: 5px 10px grey;
    }

    p {
        color: grey;
        padding: 25px;
        padding: 0;

    }

    span {
        color: red;
    }
</style>