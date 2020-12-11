<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tentukan nilai</title>
</head>
<body>
    <h1>SILAHKAN DI ISI  TERIMA KASIH</h1>
    <form method="POST">
        <label>Masukan nilai nya</label>
        <br>
        <input type="number" name="angka">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>


<?php
$angka = "";
$angka = isset ($_POST['angka']) ? $_POST['angka'] : '' ;
function tentukan_nilai($angka){
$submit=($angka);   
if($angka == ""){
    echo "";
}
else if($angka >= 0 && $angka <= 49){
    echo 'Nilai : ' . $angka . ' <br>   <br> Keterangan =    Masih Kurang Nilainya <br><br> Grade : D';
}
else if($angka >= 50 && $angka <=69){
    echo 'Nilai :  ' . $angka . '<br> <br> Keterangan  =  Cukup Nilainya <br><br> Grade : C ';
}
else if($angka >= 70 && $angka <=84){
    echo 'Nilai :  ' . $angka . '<br> <br> Keterangan  =  Baik Nilainya  <br><br> Grade : B';
}
else if($angka >= 85 && $angka <=100){
    echo 'Nilai :  ' . $angka . '<br> <br> Keterangan  =  Sangat Baik Nilainya  <br><br> Grade : A';
}
else{
    echo "<h1 style='color:red;text-transform:uppercase;'>masukan nilai 0-100  saja ya!</h1>";
}
}
tentukan_nilai($angka)
?>