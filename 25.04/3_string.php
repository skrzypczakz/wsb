<?php
    $text = <<<TEXT
    WSB -
    Wyższa Szkoła
    Bankowa
TEXT;

echo $text."<br>";
echo nl2br($text);

$name = "JaNUsZ";

echo strtolower($name);
echo strtoupper($name),"<br>";
echo ucfirst($text),"<br>";
echo ucwords($text),"<br>";

$lorem = "lorem";


$col = wordwrap($lorem, 25, '<br>');
echo $col;

ob_clean();

$name1 = "Janusz";
$name2 = "    Janusz  ";
echo strlen($name1);  //6
echo strlen($name2);  //6
echo strlen(ltrim($name2));  //7
echo strlen(rtrim($name2));  //8
echo strlen(trim($name2)),"<br>;"  //6

//przeszukiwanie ciągów znakó
 $address = "Poznań, ul. Polna 10, tel. (61) 123-44-55";


 $search = stristr($address, 'Tel', true);
 echo $search,"<br>";

//substr
  
  $surname = "Janusz Kowalski";
  $surname = substr($surname, 7, 5);
  echo $surname, "<br>";

//przetwarzanie ciagów znakow
 $replace = str_replace('%name%', 'Janusz', 'Mam na imię %name%');

 echo $replace,"<br>";

 $login ="bączek";
 $censore = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
 $replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

 $newLoogin = str_replace($censore, $replace, $login);
 echo $newLoogin;



?>