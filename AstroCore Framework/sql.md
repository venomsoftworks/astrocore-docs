# Setup Database

## Wat is een SQL database?
SQL (Structured Query Language) is een ANSI/ISO-standaardtaal voor een relationeel databasemanagementsysteem (DBMS). Het is een gestandaardiseerde taal die gebruikt kan worden voor taken zoals het bevragen en het aanpassen van gegevens in een relationele database. SQL kan met vrijwel alle moderne relationele databaseproducten worden gebruikt.

## Installatie database
AstroCore maakt ook gebruik van een SQl database. Dat betekend dat het nodig is om dat in te stellen. Voor mensen die ooit een server hadden weten nog wel dat dit soms een lastig stukje is. 

- Download [HeidiSQL](https://www.heidisql.com/installers/HeidiSQL_12.1.0.6537_Setup.exe)
- Maak een database aan op je paneel en voer de connectiegegevens in. 
- In de download zat een bestand genaamt "astro.sql" Dit bestand. Doe dan wat de foto zegt met dat bestand als uitvoerbaar bestand.
  ![](https://cdn.discordapp.com/attachments/1014251212855574600/1029110859504554024/Screenshot_1.png)
- Als dat gelukt is betekend het dat je database er goed in staat! Krijg je errors? Vraag dan even om hulp in onze [hub](https://hub.venomsoftworks.com/)


## Linken van database
Nu je de database hebt geinstalleerd moet je er nog voor zorgen dat je kan communiceren met de AstroCore API en SERVER. Dit kan je doen door in het bestand mysql.cfg te gaan in het paneel. Hier zal je een MySQL connection string zien. Die van jou moet daar in. Hoe je dat doet is vrij simpel.
```mysql://gebruikersnaam:wachtwoord@mijnip:3306/database```

Je kan ook de automatisch gemaakte gebruiken die je kan vinden in paneel en dan Databases en dan de connectiestring die begint met jdbc:. Haal hiervan de jbdc weg zodat je string begint met mysql:// en you are good to go!

