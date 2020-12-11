<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL PHP KE 2</title>
</head>
<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3>Soal 1</h3>";
     /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike","Dustin","Will","Lucas","Max","Eleven");
        print_r($kids);
        echo "<br>";
        echo "<br>";
        $adult = array("Hopper","Nancy","Joyce","Jonathan","Murray");
        print_r($adult);

        echo "<h3>Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids : ";  echo count($kids);
        echo "<ol>";
        echo "<li>$kids[0]</li>";
        //lanjutkan
        echo "</ol>";
        echo "Total Adults: "; echo count($adult);
        echo "<br>";
        echo "<ol>";
        echo "<li>$adult[0]";
        //lanjutkan
        echo "</ol>";

        
        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */

        $people1 = ['"Name : " => "Will Byers",
        "Age :" => 12,
        "Aliases :" => "Will the Wise",
        "Status :" => "Alive" '];
        print_r($people1);
        echo "<br>";
        echo "<br>";
        $people2 = ['"Name : " => "Mike Whiller",
        "Age :" => 12,
        "Aliases :" => "Dungeon Master",
        "Status :" => "Alive" '];
        print_r($people2);
        echo "<br>";
        echo "<br>";
        $people3 = ['"Name : " => "Jim Hopper";
        "Age :" => 43;
        "Aliases :" => "Chief Hopper";
        "Status :" => "Deceased"'];
        print_r($people3);
        echo "<br>";
        echo "<br>";
        $people4 = ['"Name : " => "Eleven";
        "Age :" => 12;
        "Aliases :" => "El";
        "Status :" => "Alive"'];
        print_r($people4);
    ?>
</body>
</html>