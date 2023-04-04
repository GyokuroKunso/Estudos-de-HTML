<?php



 $nota1 = $_POST['nota1'];             
 $nota2 = $_POST['nota2'];
 $nota3 = $_POST['nota3'];
         
 $media= ($nota1 + $nota2 + $nota3) /3;
         
 echo $media."<br>";
 
 if ($media>=7){
    echo "Aprovado";}
 elseif(($media < 7)&&($media >= 4)){
    echo "Prova Final";}
 else
  echo "Reprovado";
 
?>