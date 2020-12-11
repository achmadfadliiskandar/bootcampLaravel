<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlatih Function dan Conditional</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3>Soal No 1 Greetings</h3>";
    /* 
        Soal No 1
        Greetings
        Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

        contoh: greetings("abduh");
        Output: "Halo Abduh, Selamat Datang di Sanbercode!"
    */

    // Hapus komentar untuk menjalankan code!
    // greetings("Bagas");
    // greetings("Wahyu");
    // greetings("Abdul");

        // Code function di sini
        function greetings($sapa,$nama){
            echo $sapa." ";
            echo "$nama"," Selamat Datang di Sanbercode <br>";
        }
            greetings("Halo","Abduh <br>");
            greetings("Halo","Bagas <br>");
            greetings("Halo","Wahyu <br>");
            greetings("Halo","Abdul <br>");

            echo "<h3>Soal No 2 Reverse String</h3>";
        /* 
            Soal No 2
            Reverse String
            Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
            Function reverseString menerima satu parameter berupa string.
            NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

            reverseString("abdul");
            Output: ludba

        // Hapus komentar di bawah ini untuk jalankan Code
        // reverseString("abduh");
        // reverseString("Sanbercode");
        // reverseString("We Are Sanbers Developers")

            
        */
        
        function reverseString($nama){
            $nb = '';
            $nd = strlen($nama);
            for($i = 1; $i <= $nd; $i++){
                $nb .= substr($nama,$nd-$i,1);
            }
            return $nb;
        }
        echo reverseString('abdul');
        echo "<br>";
        echo reverseString('abduh');
        echo "<br>";
        echo reverseString('Sanbercode');
        echo "<br>";
        echo reverseString('We Are Sanbers Developers');

        echo "<h3>Palindrome</h3>";

        echo "<h3>Soal No 3 Palindrome </h3>";
        /* 
            Soal No 3 
            //palindrome adalah suatu kata yang ketika diubah depan belakang yang menghasilkan sama aja //pengertian palindrome
            Palindrome
            Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
            Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
            Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
            NB: 
            Contoh:     
            palindrome("katak") =>  output : "true"
            palindrome("jambu") => output : "false"
            NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!
            
        */
        // Code function di sini
        
        // Hapus komentar di bawah ini untuk jalankan code
        // palindrome("civic") ; // true
        // palindrome("nababan") ; // true
        // palindrome("jambaban"); // false
        // palindrome("racecar"); // true
        //kondisi boolean
        // $satu = 100;
        // $dua = 70;
        // if($satu > $dua){
        //     var_dump(true);
        // }
        // else{
        //     var_dump(false);
        // }

        function palindrom($satu){
            $dua = '';
            $tiga = strlen($satu);
            for($i = 1; $i <= $tiga; $i++){
                $dua .= substr($satu,$tiga-$i,1);
            }
            return $dua;
        }
        print palindrom("civic");
        var_dump(TRUE);
        echo "<br>";
        echo "<br>";
        print palindrom("nababan");
        var_dump(true);
        echo "<br>";
        echo "<br>";
        print palindrom("jambaban");
        var_dump(FALSE); //bukan palindrom 
        echo "<br>";
        echo "<br>";
        print palindrom("racecar");
        var_dump(true);
       ?>
</body>
</html>