U okviru prve spirale ura�ene su sljede�e stvari:
�	Napravljeno je pet stranica sa grid-viewom te po�tuju�i responzivni dizajn.
�	Koriste�i media-query stranica se ispravno otvara na ekranima manje rezolucije(smartphone).
�	Implementirane su 3 forme i to za registraciju, rezervaciju te za kontakt.
�	Implementiran je meni koji je jasno vidljiv i konzistentan na svim podstranicama
�	Svi elementi na stranici su savr�eno poravnati, te tako�er nisu uo�eni nikakvi bugovi u kori�tenju web stranice.

FAJLOVI
img-slike kori�tene za stranicu
Rent-a-car.html Glavna stranica
Kontakt.html , Onama.html, Rezervacija.html, Vozila.html - Podstranice
stil.css - izdvojeni css kod
skripta.js �javascript dio

SPIRALA 2:
�ta je ura�eno? 
Ura�en je AJAX dio. Svaka podstranica se u�itava bez loadanja �itave stranice.
Ura�eno je spa�avanje zadnjeg unos sa forme na stranici Kontakt i njegovo pojavljivanje pri novom u�itavanju.
Ura�en je carousel(koji nije do kraja zavrsen estetski, ali je njegova postignuta njegova funkcionalnost).
Zapo�eta validacija
�ta nije ura�eno ? Validacija formi (nisam stigao).

Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rje�enje (opis rje�enja)?
Bug je na stranici Vozila kod carousel-a gdje nisu poravnata dugmad za lijevo i desno i slike koje se vrte. �to se mo�e ispraviti unutar CSS fajla(poravanjem, veli�inom sli�ica).
Takodjer bug je na istom carousel-u prilikom smanjivanja rezolucije(takodjer unutar css koda u dijelu za ekrane manje rezolucije popraviti tj. da dugmad budu na mjestu i pri smanjivanju rezolucije) .
IV  - Bug-ovi koje ste primijetili ali ne znate rje�enje
/

Spirala 3:
�ta je ura�eno? 
Na po�etnoj stranici je napravljena login forma, na koju se mo�e logovati admin sa podacima "admin" "pass" koji se �uvaju u xml fajlu.
Kada se loguje, pojavljuju mu se linkovi za ADMIN stranicu, pdf export te Download csv. Preko forme registracija, podaci se �uvaju u xml datoteku.
na stranici admina, admin ima uvid u sve Rezervacije, koje se takodjer �itaju iz xml-a, te ih mo�e brisati(ispisuje se naziv obrisanog), kao i dodavati nove 
rezervacije. Dalje, admin ima mogu�nost export pdf sa kojim dobija u pdf-u listu rezervacija. Te takodjer ima opciju "download csv" kojom downloaduje 
csv datoteku sa rezervacijama.
Tako�er, na po�etnoj stranici je implementirana pretraga po 2 polja(ime i prezime) za admina, gdje moze pretrazivati rezervacije.
Na stranici Rezervacija, sa forme se podaci u�itavaju u xml fajl. Podaci sa formi su za�ti�eni od xss.

�ta nije ura�eno? 
opcija "izmijeni" na adminovoj stranici.
Opcija Trazi kod pretrage.

Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rje�enje (opis rje�enja)?
Na stranici Admin.php podaci koji se ispisuju nisu lijepo formatirani, tj. poravnati, �to se mo�e ispraviti prikladnim css kodom.
Nakon pozivanja opcije "obrisi" stranica nigdje ne vodi dalje, �to se mo�e rije�iti sa pozivanjem posljednjeg prozora sa window.history.back();
Tako�er, bug koji sam prekasno shvatio (5 do 12), na stranici admin.php , link "nazad na prethodnu" vodi na "Rezervaciju" a treba na "Registraciju".

IV  - Bug-ovi koje ste primijetili ali ne znate rje�enje



 http://rentacaragencija-rentacar.44fs.preview.openshiftapps.com 