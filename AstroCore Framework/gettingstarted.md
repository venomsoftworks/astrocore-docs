# Getting Started

## Welcome to Astro Framework.

First. We want to give some important information.

From now on we will talk Dutch only because this framework is dutch based. Feel free to google translate!



## Voorwoord

Hey! Leuk dat je AstroCore gekocht hebt! Wij zijn blij dat je gekozen hebt voor het meest geavanceerde framework van Nederland! Om ervoor te zorgen dat het een uniek systeem blijft is er een license systeem ingesteld op de server-core. Dat betekend dat alleen de core sommige delen encrypted zijn door onze partner [Luraph](https://lura.ph). Ons systeem laat toe dat je op onbeperkt servers ons Framework gebruik. Alleen wanneer jij de 5 servers overschrijd wordt de sleutel gefreezed en gaan we een gesprek aan waarom je zoveel servers gebruikt. Blijkt hieruit dat er fraude gepleegd wordt of je reageerd niet hebben wij het recht om je toegang tot het Framework te ontzeggen. Als de 5 servers gewoon van jou zijn dan is er geen probleem. Wil jij AstroCore resellen? Dat kan! Vraag hiervoor even hulp op onze [hub](https://hub.venomsoftworks.com/)

#### Auteurs
- [Sympact](https://venomsoftworks.com/olivier.html)
- [Mike](https://venomsoftworks.com/mike.html)
- [Stuncs](https://github.com/stuncs69 )

# Installatie
AstroCore installeren is heel makkelijk! Wij hebben een stappenplan gemaakt die de installatie en configuratie uiteindelijk ook doet. Geloof ons. Zelfs een opa kan dit.

### Stap 1: Download de code
Om AstroCore op jouw server te zetten moeten we eerst de code downloaden. Wij gaan in deze handleiding er van uit dat je AstroCore gaat gebruiken op Pterodactyl (Linux). Dat is een paneel van een hostingprovider.

In onze [hub](https://hub.venomsoftworks.com/) kan je de nieuwste download vinden. Soms heb je keuze om een beta of stabiele versie te downloaden. Als je niet veel ervaring hebt met lua raden wij aan om de stabiele versie te doen. 

### Stap 2: Extract te code
Als je het zip bestand hebt gedownload moet je het natuurlijk uitpakken. Wij raden hier Winrar of 7zip voor aan. Windows Uitpakken optie heeft namelijk nog wel eens de neiging om bepaalde mapjes over te slaan die van cruciaal belang zijn.

### Stap 3: Upload de code naar het paneel
Om de server te kunnen gebruiken is het van groot belang dat je de bestanden op de server krijgt. Volg deze kleine stappen heel nauwkeurig want hierin fouten maken gaat je heel veel tijd kosten.

  - Ga naar je paneel.
  - Open bestanden en delete de "resources" folder. (NIET DIE VAN JE ZIP BESTAND DUS)
  - Verwijder je server.cfg en eventuele sql.cfg of resources.cfg op het paneel.
  - Maak een verbinding met je FTP van het paneel. Dit kan via Filezilla, Termius of WinSCP. Wij raden aan om FileZila te gebruien.
  - In filezilla open je het uigepakte folder waarin alle bestanden zitten. Hier zie je de map resources en een paar andere bestanden. Sleep deze allemaal naar jouw paneel zijn FTP. 
  - Als je bij de vorige stap een overschrijfmelding krijgt heb je een fout gemaakt. Begin het procces opnieuw.
  - Wacht tot de upload klaar is. SLUIT JE PC NIET AF TERWIJL HIJ BEZIG IS! (Dit kan heel lang duren met slecht internet)


#### Ga nu verder met Setup Database