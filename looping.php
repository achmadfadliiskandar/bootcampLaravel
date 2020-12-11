<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>
    <?php
    echo "<h3>Soal No looping I love PHP</h3>";
            /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        // Lakukan Looping Di Sini
       for($x = 2; $x <= 21; $x+=2){
           echo " $x I Love PHP  <br>";
       }
       echo "<strong>LOOPING KEDUA</strong>";
       echo "<br>";
       for($x = 20; $x > 1; $x-=2){
        echo " $x I Love PHP  <br>";
       }
       echo "<h3>Soal No 2 Looping Array Modulo </h3>";
       /* 
           Soal No 2
           Looping Array Modulo
           Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
           Tampung ke dalam array baru bernama $rest 
       */

        $numbers = [18,45,29,61,47,34];
        echo "array numbers: ";
        print_r($numbers);

        $rest = [];

        echo "<br>";
        echo "<br>";

        foreach($numbers as $rest){
            echo $rest / 5;
        }

        echo "<h3>Soal No 3 Looping Asosiative Array</h3>";
        
        /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 
        */
        echo "<br>";
            $barang = ['"No :  => "001",
            "Nama : " => "Keyboard Logitek",
            "price : " => 60000,
            "description : " => "Keyboard yang mantap untuk kantoran",
            "source : " => "Logitek.jpg <br><br>
            No :  => "002",
            "Nama : " => "Keyboard MSI",
            "price : " => 300000,
            "description : " => "Keyboard gaming MSI mekanik",
            "source : " => "msi.jpeg <br><br> 
            No :  => "003",
            "Nama : " => "Mouse Genius",
            "price : " => 50000,
            "description : " => "Mouse Genius biar lebih pinter",
            "source : " => "genius.jpeg <br><br>
            No :  => "004",
            "Nama : " => "Mouse Jerry",
            "price : " => 30000,
            "description : " => "Mouse yang disukai kucing",
            "source : " => "jerry.jpeg"'];
            print_r($barang);

            for($x = 1; $x <count($barang); $x++){
                echo($barang)[$x];
            }

        // for($i = 0; $i <= 0; $i++){
        //     $namabarang1 = ['"No :  => "001",
        //     "Nama : " => "Keyboard Logitek",
        //     "price : " => 60000,
        //     "description : " => "Keyboard yang mantap untuk kantoran",
        //     "source : " => "logitek.jpg" '];
        //     print_r($namabarang1);
        //     echo "<br>";
        //     echo "<br>";
        //     $namabarang2 = ['"No :  => "002",
        //     "Nama : " => "Keyboard MSI",
        //     "price : " => 300000,
        //     "description : " => "Keyboard gaming MSI mekanik",
        //     "source : " => "msi.jpeg" '];
        //     print_r($namabarang2);
        //     echo "<br>";
        //     echo "<br>";
        //     $namabarang3 = ['"No :  => "003",
        //     "Nama : " => "Mouse Genius",
        //     "price : " => 50000,
        //     "description : " => "Mouse Genius biar lebih pinter",
        //     "source : " => "genius.jpeg" '];
        //     print_r($namabarang3);
        //     echo "<br>";
        //     echo "<br>";
        //     $namabarang4 = ['"No :  => "004",
        //     "Nama : " => "Mouse Jerry",
        //     "price : " => 30000,
        //     "description : " => "Mouse yang disukai kucing",
        //     "source : " => "jerry.jpeg" '];
        //     print_r($namabarang4);
        // }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $items = [" <br>
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg <br>, 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg <br>,
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg <br>,
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg <br>
        "];
    print_r($items);

    echo "<h3>Soal No 4 Asterix</h3>";
     /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
        for($i = 0; $i <1; $i++){
            echo "* <br>";
            echo "**  <br>";
            echo "***  <br>";
            echo "****  <br>";
            echo "*****  <br>";
        }
        echo "Asterix";
        echo "<br>";
    ?>
</body>
</html>