<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal PHP</title>
</head>
<body>
   <h1>Berlatih Soal PHP</h1> 
   <?php
   echo "<h2>Soal NO 1</h2>";
   //SOAL NO 1
   //Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 
   $string = "PHP IS NEVER OLD";
   echo strlen ($string);
   echo "<br>";
   echo str_word_count($string);

   $first_sentence = "Hello PHP!";
   echo "<br>";
   echo "<br>";
   echo strlen($first_sentence);
   echo "<br>";
   echo str_word_count($first_sentence);

   $second_sentence = "I'm ready for the challenges";
   echo "<br>";
   echo "<br>";
   echo strlen($second_sentence);
   echo "<br>";
   echo str_word_count($second_sentence);

   echo "<h3>Soal Kedua</h3>";
   /* SOAL NO 2
    Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. */
    $string2 = "I Love PHP";
    echo "<label>String: </label>\"$string2\"<br>";
    echo "Kata Pertama: ". substr($string2, 0, 1) . "<br>";
    //lanjutkan di bawah ini
    echo "<br>";
    echo "<br>";
    echo "<label>String: </label>\"$string2\"<br>";
    echo "Kata Kedua: ". substr($string2, 0, 6). "<br>";
    echo "<br>";
    echo "<br>";
    echo "<label>String: </label>\"$string2\"<br>";
    echo "<br> Kata Ketiga: " . substr($string2, 0, 10). "<br>";


    echo "<br>";
    echo "<br>";
    echo "<h3> Soal No 3 </h3>";
    //Mengubah karakter atau kata yang ada di dalam sebuah string.//
    $string3 = "PHP is old but sexy";
    echo "String: \"$string3\" ";
    echo "<br>";
    echo str_replace("sexy","awesome", $string3);
   ?>
</body>
</html>