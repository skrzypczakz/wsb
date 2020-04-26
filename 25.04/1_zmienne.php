<?php   
    $name="Anna";
    echo "$name"; 
    echo '$name';

    $dec=10;
    $hex=0xA;
    $oct=010;
    $bin=0b1010;

    echo $bin;

//składnia heredoc
    $name = "Janusz";
    $surname = "Nowak";

    echo <<<E
    <h3>Wizytówka</h3>
    Imię: $name<br>
    Nazwisko: $surname<hr>
E;

    $text= <<<E
    <h3>Text - heredoc</h3>
E;
    echo $text;
    
//składnia nowdoc

    echo <<<'E'
    <h3>Wizytówka</h3>
    Imię: $name<br>
    Nazwisko: $surname<br>
E;    

?>