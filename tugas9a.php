 <?php

function Fibonacci($n){

    $angka1 = 0;
    $angka2 = 1;

    $jalan = 0;
    while ($jalan < $n){
        echo ' '.$angka1;
        $angka3 = $angka2 + $angka1;
        $angka1 = $angka2;
        $angka2 = $angka3;
        $jalan = $jalan + 1;
    }
}


$n = 22;
Fibonacci($n);
?>