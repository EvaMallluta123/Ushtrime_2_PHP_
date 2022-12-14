<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 style="color: brown;">//Ushtrimi 1</h2>
    <!-- 1. Jepen notat e studenteve ne lenden PAW
$notat = "10,6,9,8,8,9,5,4,4,10,10,6,7,8,9,9,5,6,5,10,7,8,8,9,7";
Shkruani kodin ne PHP qe afishon:
 Noten mesatare
 Sa nota jane nen mesatare dhe sa nota jane mbi mesatare
 Noten maksimale dhe noten minimale
 Frekuencen e seciles note te afishuar ne nje tabele -->
<?php
function getMax($array)
{
   $n = count($array);
   $max = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;      
}
function average($array)
{
 $total = 0;
 foreach ($array as $item) {
  $total += $item;
 };
 return $total/count($array);	
}

function frequency($array, $x)
{
    $n = count($array);
    $cont = 0;
    for ($i = 1; $i < $n; $i++)
        if ($x == $array[$i])
      $cont+=1;
      return  $cont;
}
function aboveAverage($array)
{
    $count=0;
 $total = 0;
 foreach ($array as $item) 
    $total += $item/count($array);
    foreach ($array as $item) 
   if($item>=$total){
    $count+=1;
}
   return $count;
}
 
function belowAverage($array)
{
    $count=0;
 $total = 0;
 foreach ($array as $item) 
    $total += $item/count($array);
    foreach ($array as $item) 
   if($item<=$total){
    $count+=1;
}
   return $count;
}
// Returns maximum in array
function getMin($array)
{
   $n = count($array);
   $min = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;      
}
 
// Driver code
$array = array(10,6,9,8,8,9,5,4,4,10,10,6,7,8,9,9,5,6,5,10,7,8,8,9,7);
echo "<p>Maksimumi është: </p>";
echo (getMax($array));
echo("\n");
echo "<p>Minimumi është: </p>";
echo(getMin($array));
echo "<p>Mesatarja është: </p>";
echo(average($array));
echo "<p>Notat mbi mesatare janë: </p>";
echo(aboveAverage($array));
echo "<p>Notat mbi mesatare janë: </p>";
echo(belowAverage($array));
echo "<p>Frekuenca e numrit: </p>";
echo(frequency($array, 7));


//mënyra e dytë
// $array = array(1, 2, 3, 4, 5);
// echo(max($array));
// echo("\n");
// echo(min($array));
?>
<h2>Fekuencat e notave janë: </h2>
 <table border="1">
            <tr>
            <?php 
            foreach ($array as $item): 
            ?>
                <th><?php echo(frequency($array, $item))?></th>
            <?php endforeach; ?>
            </tr>
 </table>

 <h2 style="color: brown;">//Ushtrimi 2</h2>
 <!-- 2. Shkruani kodin PHP qe krijon nje vektor te shoqeruar qe permban 10 shtete ne Europe dhe
kryeqytetet e tyre. Emri i shteteve sherben si Key, ndersa kryeqytetet e tyre si Values.
 Afishoni elementin e pare te vektorit te shoqeruar
 Afishoni shtetet dhe kryeqytetet perkatese ne 2 format e meposhtme:

o Ne nje tabele te renditura nga emri i shtetit
Shteti Kryeqyteti
Shqiperia Tirana

o Ne formen

“ Shteti: SHQIPERIA; Kryeqyteti: TIRANA” -->
<?php
$languages = array ("Shqiperia" => "Tirana","Gjermani" => "Berlin","Italia" => "Roma", "Vietnami" => "Hanoi", "Kuba" => "Havana" , "Finlande" => "Helsinki" , "Pakistan" => "Islamabad" ,"Bolivia" => "La Paz" , "Anglia" => "Londër", "Greqia" => "Athina");
echo "<p>Elementi i parë i vektorit të shoqëruar është: </p>";
echo current($languages) . "<br>";

?>
<table border="1">
<tr>
    <th>Shteti</th>
    <th>Kryeqyteti
    </th>
  </tr>
           
            <?php 
            
            foreach ($languages as$x => $x_value): 
            ?>
             <tr>
            <td><?php echo $x?></td>
            <td><?php echo $x_value?></td>
            </tr>
            <?php endforeach; ?>
 </table>
 <?php

foreach($languages as $x => $x_value) {
  echo "Shteti: " .strtoupper( $x ) .  ",   Kryeqyteti: " .strtoupper($x_value);
  echo "</br>";
}
?>
 <h2 style="color: brown;">//Ushtrimi 3</h2>
 <!-- 3. Shkruani kodin ne PHP qe krijon 2 vektor te shoqeruar qe permbajne notat qe kane marre
studentet 1 dhe 2 gjate semestrit te pare ne lendet specifike.
- Afishoni nqs studentet jane kalues ne te gjitha lendet ose jo.
- Afishoni cili student ka noten mesatare me te larte
- Afishoni lenden/lendet ku studentet kane marre noten maksimale -->
<?php
$studenti1 = array ("Informatik" => "7","Matemaik" => "8","Ekonomi" => "9", "Databazë" => "10", "Algoritmikë" => "6");
$studenti2 = array ("Informatik" => "6","Matemaik" => "5","Ekonomi" => "7", "Databazë" => "9", "Algoritmikë" => "4");
function filterArray($value){
    return ($value> 4);
}
$total=0;
$filteredArray = array_filter($studenti2, 'filterArray');

foreach($filteredArray as $k => $v){
$total+=1;
 
}
if($total==5){

    echo "Studenti është kalues";
}
else {
    echo "Studenti nuk është kalues";
}
$avergst1=0;
$avergst2=0;

    $avergst1=average($studenti1);


$avergst2=average($studenti2);

    if($avergst1>$avergst2){
        echo "<br>";
        echo "Studenti1 ka mesataren më të mirë";
    }
    else {
        echo "<br>";
        echo "Studenti2 ka mesataren më të mirë";
    }

?>
</body>
</html>

