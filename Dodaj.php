<?php
$xml= new DOMDocument("1.0","UTF-8");
					$ime = htmlspecialchars($_REQUEST['ime']);
					$prezime = htmlspecialchars($_REQUEST['prezime']);
					$vozilo = htmlspecialchars($_REQUEST['vozilo']);
					$xml->load('XMLBaza.xml');

$rootTag = $xml->getElementsByTagName("document")->item(0);
$ime=$_POST['ime'];
$dataTag = $xml->createElement("data");
$imeTag=$xml->createElement("Ime", $ime);
$prezimeTag=$xml->createElement("Prezime", $prezime);
$datumTag=$xml->createElement("Datum", $_REQUEST['datum']);
$voziloTag=$xml->createElement("Vozilo", $vozilo);
$dataTag->appendChild($imeTag);
$dataTag->appendChild($prezimeTag);
$dataTag->appendChild($datumTag);
$dataTag->appendChild($voziloTag);

$rootTag->appendChild($dataTag);
$xml->save("XMLBaza.xml");


?>

<form action="Dodaj.php" method="POST">
      <p>Ime:<br /><input type="text" name="ime" > <br>
	  Prezime:<input type="text" name="prezime"><br>
	  Datum:<input type="date" name="datum"><br>
	  Vozilo:<input type="text" name="vozilo"><br>
	  </p>
      <input type="submit" name="dodaj" value="Pošalji">
    </form>