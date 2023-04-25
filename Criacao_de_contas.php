<?php
echo "Exercicio 1:"."<br>";
# EXERCICIO 1

$a = 2;
$b = 5;
$c = 2;

$delta = ($b**2) - 4*$a*$c;

$x1 = (($b*-1) + sqrt($delta))/(2*$a);

$x2 = (($b*-1) - sqrt($delta))/(2*$a);

echo "Valor de delta é: ".$delta."<br>";
echo "<br>";
echo "X': ".$x1."<br>";
echo"<br>";
echo "X'': ".$x2."<br>";

echo "<br><br>";
echo "Exercicio 2:"."<br>";
# EXERCICIO 2

$x = 20;

if ($x %2 == 0) {
    for ($i=0; $i <$x; $i++){
    echo $i."<br>";
}
} else {
    echo "É impar";
}
 
echo "<br><br>";
echo "Exercicio 3:"."<br>";
# EXERCICIO 3
$peso = 60;
$altura = 1.70;

$imc = $peso/($altura**2);

if ($imc < 18.5) {
    echo "Abaixo do Peso: ".number_format($imc,2)."<br>";
} elseif ($imc >= 18.5 && $imc < 25){
    echo "Peso ideal: ".number_format($imc,2)."<br>";

} elseif ($imc >= 25 && $imc <= 30) {
    echo "Sobrepeso: ".number_format($imc,2)."<br>";

}
else {
    echo "Obesidade: ".number_format($imc,2)."<br>";
}












?>