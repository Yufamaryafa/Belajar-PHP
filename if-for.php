<?php
    // Materi pengulangan (IF ELSE)
    $nilai = 74;
    echo "Nilai kamu adalah $nilai <br>";
    echo "Nilai status kamu = ";
    if ($nilai > 78) {
        echo "Lulus";
    } else if ($nilai == 78) {
        echo "Lulus KKM";
    } else {
        echo "Tidak lulus";
    }
    echo "<hr>";

    $nilai_web = 80;
    $nilai_pbo = 82;
    echo "Nilai kamu = $nilai_web <br>";
    echo "Nilai kamu = $nilai_pbo <br>";
    echo "Nilai kelulusan = ";
    if ($nilai_web >= 80 and $nilai_pbo >=80) {
        echo "Lulus 2 mapel produktif";
    } else if ($nilai_web >= 80 or $nilai_pbo >= 80) {
        if ($nilai_web >= 80) {
            echo "Lulus mapel WEB";
        }
        if ($nilai_pbo >=80) {
            echo "Lulus mapel PBO";
        }
    } else {
        echo "Tidak lulus mapel produktif";
    }
    echo "<hr>";
    //Materi Perulangan (WHILE, DO WHILE, FOR)
    $i = 1;
    while ($i <= 5) {
        echo "Hello World ! ke - $i <br>";
        $i++; // Assigment +1
    }
    echo "<hr>";
    $j = 1;
    do{
        echo "$j . <br>";
        $j++;
    }while($j <= 5);

    echo "<hr>";
    for ($k = 1; $k <= 10; $k++) {
        echo $k . "<br>";
    }
    echo "<hr>";
    for ($x = 9; $x >=1; $x--){
        for ($y = 1; $y <= $x; $y++){
            echo "$y";
        }
        echo "<br>";
    }
    echo "<hr>";
    for ($z = 1; $z <= 10; $z++) {
        if ($z % 2 == 0) {
            echo $z . "- Genap <br>";
        } else {
            echo $z . "-Ganjil <br>";
        }
    }
    
    