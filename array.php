<?php
    $nama = "Rizki Catur";

    echo $nama . "<br>";

    $nama_array = array("fariz", "eben", "Haikal", "rizky giat", "Indra");
    print_r($nama_array); echo "<br>";

    echo $nama_array[0] . "<br>";
    echo $nama_array[1] . "<br>";
    echo $nama_array[2] . "<br>";

    echo "<hr>";

    foreach ($nama_array AS $datanama) {
        echo $datanama . "<br>";
    }

    echo "<hr>";
    //versi
    for ($i = 0; $i < COUNT($nama_array); $i++) {
        echo $nama_array[$i] . "<br>";
    } 

    //multiple array 
    $kelas11rpl1 = array(
        array("Risky Catur", "L", "Mancing"),
        array("Eben", "L", "Main bola"),
        array("Fariz", "L", array ("Berenang", "Main game", "Basket")),
        array("Volly", array("Maen kelereng", array ("Maen layangan")))
    );

    echo "<pre>";
    print_r($kelas11rpl1);
    echo "<?pre>";

    echo "<hr>";
    echo $kelas11rpl1 [1][0] . " ";
    echo $kelas11rpl1 [2][2][0]. " ";
    echo $kelas11rpl1 [3][1][1][0]. " ";
    echo $kelas11rpl1 [0][2];  

?>