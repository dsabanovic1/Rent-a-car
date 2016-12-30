<!DOCTYPE html>
<html>
   <head>
     <title>Moja Web stranica</title>
	 <meta charset="utf-8" />
	 <link rel="icon" href="img/icon4.png">
	 <link rel ="stylesheet" href="stil.css" >
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <body class="body">
      <header class="mainHeader">
	     <img src="img/mala-ikona.jpg">
		 
		 <nav><ul>
		    <li class="aktivna"><a href="Rent-a-car.php" >Početna</a></li>
			<li><a href="Vozila.php" >Vozila</a></li>
            <li><a href="Rezervacija.php" >Rezervacija</a></li>
			<li><a href="Onama.php" >O nama</a></li>
            <li><a href="Kontakt.php" >Kontakt</a></li>
		 </ul>
		 </nav>
	  
      </header>	  
	  
	  <div class="mainContent">
	     <div class="content">
		     <article class="topContent">
			    <header>
				
				<h2> Rezervacija</h2>
				</header>
				<content>
				<?php
				if(isset($_REQUEST['ime']) && isset($_REQUEST['prezime']))
				
				{$xml= new DOMDocument("1.0","UTF-8");
				    $ime = htmlspecialchars($_REQUEST['ime']);
					$prezime = htmlspecialchars($_REQUEST['prezime']);
					$vozilo = htmlspecialchars($_REQUEST['vozilo']);
					$xml->load('XMLBaza.xml');

					$rootTag = $xml->getElementsByTagName("document")->item(0);
					$ime=$_POST['ime'];
					$dataTag = $xml->createElement("data");
					$imeTag=$xml->createElement("Ime", $ime);
					$prezimeTag=$xml->createElement("Prezime", $prezime);
					$datumTag=$xml->createElement("Datum",$_REQUEST['datum']);
					$voziloTag=$xml->createElement("Vozilo", $vozilo);
					$dataTag->appendChild($imeTag);
					$dataTag->appendChild($prezimeTag);
					$dataTag->appendChild($datumTag);
					$dataTag->appendChild($voziloTag);

					$rootTag->appendChild($dataTag);
					$xml->save("XMLBaza.xml");
				}
				
				?>
				
				   <p><form action="Rezervacija.php" method="post">
                        Ime:<br>
						<input type="text" name="ime" value="">
						<br>
						Prezime:<br>
						<input type="text" name="prezime">
						<br>
						Od kada želite auto? <br>
						<input type="date" name="datum">
						<br>
						Odaberite vozilo po želji: <br>
						<input type="text" name="vozilo"><br>
                         <br><br>
						<input type="submit" name="rezervacija" value="Rezervisi" >
                       </form>
                     					   
				   </p>  
				</content>
			 </article>
	  	

		 </div>
		  
	  </div>
	  
	  <aside class="top_sidebar">
	     <article> 
		     <h2> <img src="img/icon1.png" alt="ikonica"> </h2>
			 <p>U svako doba</p>
		 
		 </article>
		</aside>
	   <aside class="middle_sidebar">
	     <article> 
		     <h2><img src="img/icon2.png" alt ="ikonica"></h2>
			 <p>Pouzdano</p>
		 
		 </article>
		</aside> 
	 <aside class="bottom_sidebar">
	     <article> 
		     <h2><img src="img/icon3.png" alt="ikonica"></h2>
			 <p>Povoljno</p>
		 
		 </article> 
	  </aside>
	  
	  <footer class="mainFooter">
	     <p>Copyright by Dzenan Sabanovic</p>
       </footer>	
<script src="script/skripta.js" type="text/javascript"></script>	   
   </body>
   
</html>