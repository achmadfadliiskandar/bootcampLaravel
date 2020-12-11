<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kata</title>
</head>
<body>
<form  method="post" action="#">
Masukan Kata: 
<input type="text" name="nama"  >
<br>
<br>
<input type="submit" value="Proses Ubah Kata">
<br>
<br>
</form>
</body>
</html>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$panjang_kata = strlen("$_POST[nama]");
echo "Kata Yang akan di ubah :  $_POST[nama]<br><br>";
// echo $panjang_kata;
$temp = "";
echo "hasil : ";
for ($x = 0; $x < $panjang_kata; $x++) {
    // echo  substr($_POST[nama],$x,1);   
    $sub_kalimat = "$_POST[nama]";
    $temp = $temp . chr(ord(substr($sub_kalimat,$x,1))+1);
}
echo $temp;
?>