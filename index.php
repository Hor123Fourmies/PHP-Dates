<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

##Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)

$today1 = date("j/m/Y");

echo $today1;

echo "<br><br>";

##Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)

$today2 = date("d.m.y");

echo $today2;

echo "<br><br>";

##Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.


$jours = date("l");
$mois = date("F");


switch ($jours){
    case "Monday":
        $jours = "Lundi";
        break;
    case "Tuesday":
        $jours = "Mardi";
        break;
    case "Wednesday":
        $jours = "Mercredi";
        break;
    case "Thursday":
        $jours = "Jeudi";
        break;
    case "Friday" :
        $jours = "Vendredi";
        break;
    case "Saturday":
        $jours = "Samedi";
    case "Sunday":
        $jours = "Dimanche";
        break;
}

switch ($mois){
    case "January":
        $mois = "Janvier";
        break;
    case "February":
        $mois = "Février";
        break;
    case 'March': $mois = 'Mars';
        break;
    case 'April': $mois = 'Avril';
        break;
    case 'May': $mois = 'Mai';
        break;
    case 'June': $mois = 'Juin';
        break;
    case 'July': $mois = 'Juillet';
        break;
    case 'August': $mois = 'Août';
        break;
    case 'September': $mois = 'Septembre';
        break;
    case 'October': $mois = 'Octobre';
        break;
    case 'November': $mois = 'Novembre';
        break;
    case 'December': $mois = 'Decembre';
        break;
}

$today3 = $jours." ".date("d")." ".$mois." ".date("Y");
echo $today3;

echo "<br><br>";

##Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.

echo mktime(15, 00, 00, 8, 2, 2016);

echo "<br><br>";

##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.

$todayA = date("j-m-Y");
echo $todayA;
echo "<br>";
$todayB = "16-05-2016";
echo $todayB;
$timestamp = ((strtotime($todayA))-(strtotime($todayB)));
echo "<br>";
echo $timestamp;
echo "<br>";
$timestamp = $timestamp/(60*60*24);
echo $timestamp;
echo "<br>";

##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.

$moisFevrier = date ("t", mktime(00, 00, 00, 2, 1, 2016));
echo $moisFevrier;
echo "<br>";

##Exercice 7 Afficher la date du jour + 20 jours.

$date = date("Y-m-j");
$today4 = strtotime($date."+20 days");
echo date("j/m/Y", $today4);
echo "<br>";

##Exercice 8 Afficher la date du jour - 22 jours

$today5 = strtotime($date."-22 days");
echo date("j/m/Y", $today5);
echo "<br>";

##TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
#BONUS : En fonction des choix, afficher un calendrier
