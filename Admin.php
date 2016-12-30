<?php
$xml=simplexml_load_file('XMLBaza.xml');

foreach($xml->data as $rezervacija)
{   $ime=$rezervacija->Ime;
    echo (string)$rezervacija->Ime;    print' &nbsp '; 
    echo (string)$rezervacija->Prezime;  print' &nbsp ';
	echo (string)$rezervacija->Datum;   print' &nbsp ';
	echo(string)$rezervacija->Vozilo;   print' &nbsp ';
	print ' <a href="Obrisi.php?link=' .$ime.'">Obriši</a> <a href="Izmijeni.php">Izmijeni</a>';

	print '<br>';}

print '<br><a href="Dodaj.php"> Dodaj</a> ';
print '<br><a href="Rezervacija.php">vrati se na prethodnu</a>';

?>