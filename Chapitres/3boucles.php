<?php 


for ($i = 0; $i <= 9; $i++) {
   echo "Nombre : $i <br>";

}

echo "<br>";
echo "<br>";

$j = 1 ;
while ($j <= 10) {
   echo "Itération : $j <br>";
   $j++;
}

echo "<br>";
echo "<br>";

$animaux = ["Chat", "Chien", "Lapin"];
foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
}
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 10; $i++) {
   if ($i == 5) continue;
   if ($i == 8) break;
   echo "Valeur : $i <br>";
}


