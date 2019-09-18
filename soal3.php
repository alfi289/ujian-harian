<?php
$a = 1;
for($a=1;$a<=10;$a++){
    echo "Hitung Perkalian $a <br><br>";
    for($b=1;$b<=10;$b++){
    $k = $a * $b;
    if($k%2==1){
        $c = "ganjil";
    }
    else{
        $c = "genap";
    }
    echo "$a * $b => $k bilangan $c<br>";
    }
    echo "<hr>";
}

?>