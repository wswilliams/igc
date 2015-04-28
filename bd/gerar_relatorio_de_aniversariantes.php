<?php
echo "Data: ";
echo date("Y-m-d"); // exibe a data no formato DD/MM/YY
//echo " Hora: ";
//echo date("H:i"); //exibe a hora no formato HH:MM
 echo "<br>";
$date = date("Y-m-d");
$data_hoje = $date[8].$date[9];
 echo $data_hoje;
 echo "é um(a) " . gettype( $data_hoje ) . "<br />";

$data1 = (integer) $data_hoje;
 echo "$data1 é um(a) " . gettype($data1 ) . "<br />";
 
 $date2 = date("m-d");
 echo $date2. "<br />";;
 
 $date3 = date("d/m/Y");
echo $date3[0];
echo $date3[1]. "<br />";

echo "é um(a) " . gettype( $date3 ) . "<br />";
echo $date3. "<br />";

echo $date3[2]. "<br />";

$aqui = getdate(date("d/m/y"));
echo $aqui['mon'];
?>

