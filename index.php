<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

echo "Exercice 1 <br>";


function returntrue()
{
  return true;
}



echo "<br> Exercice 2 <br>";

$a="simplonien";

function chainecara($a)
{
  return $a;
}
echo chainecara($a);

echo "<br> Exercice 3 <br>";

$b="formation";

function chainecara2($b,$a)
{
  return $a." ".$b;
}

echo chainecara2($b,$a);

echo "<br> Exercice 4 <br>";

$c=20;
$d=30;

function nombre($c,$d)
{
 if($c>$d){
   return "le premier nombre est plus grand";
 }
 elseif ($c<$d) {
   return "le premier nombre est plus petit";
 }
 else {
   return "les deux nombres sont identiques";
 }
}
echo nombre($c,$d);

echo "<br> Exercice 5 <br>";

$e=18;
$f="l'age de la majorité";

function majo($e,$f)
{
  return $e." ".$f;
}

echo majo($e,$f);

echo "<br> Exercice 6 <br>";

$nom="MUNSCH";
$prenom="Kévin";
$age="18";

function npa($nom,$prenom,$age)
{
  return "Bonjour"." ".$nom." ".$prenom." ".$age;
}
echo npa($nom,$prenom,$age);

echo "<br> Exercice 7 <br>";

$age2=12;
$genre2="femme";

function gnre($age2,$genre2){

if ($age2<18 && $genre2=="homme") {
  return "Vous êtes un homme et vous êtes mineur";
}
elseif ($age2>18 && $genre2=="homme") {
  return "Vous êtes un homme et vous êtes majeur";
}
elseif ($age2<18 && $genre2=="femme") {
  return "Vous  êtes une femme et vous êtes mineur";
}
elseif ($age2>18 && $genre2=="femme"){
  return "Vous êtes une femme et vous êtes majeur";
}
}
echo gnre($age2,$genre2);

echo "<br> Exercice 8 <br>";

$g=12;
$h=22;
$i=46;

function nbr($g,$h,$i){
  return $g+$h+$i;
}

echo nbr($g,$h,$i);


 ?>
  </body>

</html>
