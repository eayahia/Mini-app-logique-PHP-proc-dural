<?php
$erreur = "" ;
$resultat = "" ;
function calc($a,$b,$op) {
    if ($op =='+')
        return $a + $b ;
    if ($op =='-')
        return $a - $b ;
    if ($op =='*')
        return $a * $b ;
    if ($op =='/')
        return ($b == 0) ? "Erreur : 404" : $a / $b ;
    
}
if (!empty($_POST)) {
   $n1 = $_POST["n1"] ;
   $n2 = $_POST["n2"] ;
   $op = $_POST["op"] ;

   $erreur = (!is_numeric($n1) || !is_numeric($n2)) ? "Entrer les N°" : "";
   if (!$erreur) {
    $resultat = calc($n1,$n2,$op);
   }
}


?>
<form method="post">
    N°1 : <input type="text" name = "n1"> <br><br>
    N°2 : <input type="text" name = "n2"> <br><br>
<select name="op" >
    <option >+</option>
    <option >-</option>
    <option >*</option>
    <option >/</option>
</select>
<br>
<br>
<button>Calculer</button>
</form>
<?php
if ($erreur) echo $erreur ;
if ($resultat) echo $resultat ;
?>