U okviru prve spirale uraðene su sljedeæe stvari:
•	Napravljeno je pet stranica sa grid-viewom te poštujuæi responzivni dizajn.
•	Koristeæi media-query stranica se ispravno otvara na ekranima manje rezolucije(smartphone).
•	Implementirane su 3 forme i to za registraciju, rezervaciju te za kontakt.
•	Implementiran je meni koji je jasno vidljiv i konzistentan na svim podstranicama
•	Svi elementi na stranici su savršeno poravnati, te takoðer nisu uoèeni nikakvi bugovi u korištenju web stranice.

FAJLOVI
img-slike korištene za stranicu
Rent-a-car.html Glavna stranica
Kontakt.html , Onama.html, Rezervacija.html, Vozila.html - Podstranice
stil.css - izdvojeni css kod
skripta.js –javascript dio

SPIRALA 2:
Šta je uraðeno? 
Uraðen je AJAX dio. Svaka podstranica se uèitava bez loadanja èitave stranice.
Uraðeno je spašavanje zadnjeg unos sa forme na stranici Kontakt i njegovo pojavljivanje pri novom uèitavanju.
Uraðen je carousel(koji nije do kraja zavrsen estetski, ali je njegova postignuta njegova funkcionalnost).
Zapoèeta validacija
Šta nije uraðeno ? Validacija formi (nisam stigao).

Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rješenje (opis rješenja)?
Bug je na stranici Vozila kod carousel-a gdje nisu poravnata dugmad za lijevo i desno i slike koje se vrte. Što se može ispraviti unutar CSS fajla(poravanjem, velièinom slièica).
Takodjer bug je na istom carousel-u prilikom smanjivanja rezolucije(takodjer unutar css koda u dijelu za ekrane manje rezolucije popraviti tj. da dugmad budu na mjestu i pri smanjivanju rezolucije) .
IV  - Bug-ovi koje ste primijetili ali ne znate rješenje
/

Spirala 3:
Šta je uraðeno? 
Na poèetnoj stranici je napravljena login forma, na koju se može logovati admin sa podacima "admin" "pass" koji se èuvaju u xml fajlu.
Kada se loguje, pojavljuju mu se linkovi za ADMIN stranicu, pdf export te Download csv. Preko forme registracija, podaci se èuvaju u xml datoteku.
na stranici admina, admin ima uvid u sve Rezervacije, koje se takodjer èitaju iz xml-a, te ih može brisati(ispisuje se naziv obrisanog), kao i dodavati nove 
rezervacije. Dalje, admin ima moguænost export pdf sa kojim dobija u pdf-u listu rezervacija. Te takodjer ima opciju "download csv" kojom downloaduje 
csv datoteku sa rezervacijama.
Takoðer, na poèetnoj stranici je implementirana pretraga po 2 polja(ime i prezime) za admina, gdje moze pretrazivati rezervacije.
Na stranici Rezervacija, sa forme se podaci uèitavaju u xml fajl. Podaci sa formi su zaštiæeni od xss.

Šta nije uraðeno? 
opcija "izmijeni" na adminovoj stranici.
Opcija Trazi kod pretrage.

Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rješenje (opis rješenja)?
Na stranici Admin.php podaci koji se ispisuju nisu lijepo formatirani, tj. poravnati, što se može ispraviti prikladnim css kodom.
Nakon pozivanja opcije "obrisi" stranica nigdje ne vodi dalje, što se može riješiti sa pozivanjem posljednjeg prozora sa window.history.back();
Takoðer, bug koji sam prekasno shvatio (5 do 12), na stranici admin.php , link "nazad na prethodnu" vodi na "Rezervaciju" a treba na "Registraciju".

IV  - Bug-ovi koje ste primijetili ali ne znate rješenje



 http://rentacaragencija-rentacar.44fs.preview.openshiftapps.com 