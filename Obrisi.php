<?php
$xml=new DomDocument("1.0","UTF-8");
$xml->load('XMLBaza.xml');
$ime=$_GET['link'];
print $ime;
$xpath = new DOMXPATH($xml);
foreach($xpath->query("/document/data[Ime='$ime']") as $node)
{
	$node->parentNode->removeChild($node);
}
$xml->formatoutput=true;
$xml->save('XMLBaza.xml');

?>