# Making words bold and/or italic

Maak twee bestanden: oefening20_form.php en oefening20_verwerk.php.

In oefening20_form.php:

backend:

Maak een gewone array ($woorden) met minimaal 5 woorden naar keuze.

frontend:

maak een formulier, waarvoor het volgende geldt:

- het formulier wordt als GET-request verzonden naar oefening20_verwerk.php

- het formulier bevat een textarea met de name: tekst

- het formulier bevat een selectielijst met de name: woord

- de eerste optie van de selectielijst heeft de value "" (lege string) en de inhoud "kies een woord..."

- de overige opties maak je met de array $woorden; value en inhoud van de opties zijn hetzelfde.

- het formulier bevat een checkbox met de name: vet

- het formulier bevat nog een checkbox met de name: cursief

- het formulier bevat een verzendknop met de tekst: go

Oefening20_verwerk.php doet het volgende:

Toon de tekst: eventuele linebreaks in de tekst moeten ook zichtbaar zijn als linebreaks.

Als er een woord is geselecteerd, dan laat je boven de tekst zien wat dat woord is en hoe vaak het voorkomt in de tekst.

Als er een woord is geselecteerd én de checkbox vet is aangevinkt, dan moeten alle voorkomens van de woorden in de tekst vet zijn.

Hetzelfde met de checkbox cursief. Uiteraard moeten de woorden dan cursief zijn.

Als beide checkboxen zijn aangevinkt, dan moeten de gevonden woorden vet én cursief zijn.

Onder de tekst moet een link staan naar het formulier met de tekst "nog een keer". 
