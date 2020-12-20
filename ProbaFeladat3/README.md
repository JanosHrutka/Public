# Teszt feladat
### Kérlek olvasd el mielőtt neki kezdesz
Egy kis cégnél dolgozol aminek most készül a weblapja. Tele van helykitöltővel, hogy lehessen tudni mi hova kell.
A cég egy nagyon menő verziókezelőt használ a Githubot. Neked létre kell hoznod egy külön branchet amit a következő képpen kell elnevezned: front-end-NEVEDIDE.
A projektvezető megkért, hogy csak ebbe dolgozz.

A már létező fájlok közül tehát a következőket módosíthatod:
- index.php
- script.js
- style.css
Ezen kívűl természetesen hozzáadni azt adsz hozzá amit szeretnél!

Fájlok amiket létre kell hoznod:
- form.php
- about.php
- contact.php

Mit szeretnénk felmérni ezzel a tesztel:
- Tudsz e verziókezelőt használni (git)
- JavaScript tudás és megoldások
- HTML&CSS tudás és megoldások

--

Feladatod a következő:
- Nem az oldallal kapcsolatos feladatok:
    - Git használat:
        - Ha készen vagy akkor a saját branchedre tölts fel a változásokat emellett csak azzal foglalkozz amiért létrejött a branch
        - Egyértelmű és tiszta commitot kell pusholnod:
            - A commit cím ne legyen túl hosszú, de látni lehessen, hogy kb mit csináltál
            - A commit messagebe viszont már bővebben írd le mit csináltál az még jobb, ha a CHANGELOG.md-be írsz és azt, amit beirtál küldöd el a commit messageben
        - Ha teljesen készen vagy akkor majd kellene egy pull request nyomnod, hogy a kód, amit írtál átnézésre kerüljön
    - Kód dokumentáció:
        - Tiszta és egyértélmű kommenteket írj dátum pecséttel (// Ez egy egyszerű komment egy komment példához (2020.08.28) Attila)
        - Ahova természetesen több magyarázat kell oda egyértelműen többet írsz
    - Maga a kóddal kapcsolatban:
        - Nincsen semmilyen séma vagy modellhez erőltetve a munkád ennek ellenére tiszta és olvasható kódot írj

--

Oldallal kapcsolatos feladatok:
- Az oldalt dinamikussá és modern kinézetűvé kell tenni (minél szebb annál jobb, de ne vidd túlzásba)
- Index.php
    - A főoldalon már az alapok levannak fektetve, de ajánlatos, hogy újra kezd mivel ez csak példának van, hogy kb milyen legyen a felépítés
    - A főoldalon van három Cikk (Article 1, Article 2 és Article 3) ezeknek a tartalma lehet teljesen random szöveg a lényeg az, hogy amikor rákattint valaki mondjuk az article 2-re akkor a content megváltozzon arra a szövegre, ami article 2 szövege (a többivel is ugyan így)
    - A login és a search helyére input mezőket rakj
- From.php
    - Ez az oldal állatok bevitelére kell
    - Erre az oldara nem kell a pageheading (ahelyett valami szépet pakolj oda)
    - Ezen az oldalon kell dinamikusan input csoportot klónozni:
        - Kell három darab input + 1 a klónoknál:
            - Név
            - Fajta
            - Életkor
            - Törlés gomb (aminek a nyomására eltünteti a klónt)
        - Emellett ezek a dinamikus input csoportok legyenek esztétikailag elválasztva
- About.php
    - Ezt az oldalt rád bízom
- Contact.php
    - Ahogyan ezt is
