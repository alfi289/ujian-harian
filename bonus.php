<?php
$a = [['Volvo', 22, 18], ['BMW', 15, 13], ['Saab', 5, 2], ['Land Rover', 17, 15]];

foreach($a as $b=>$c){
    $d = $b+=1;
    echo "Data Mobil $d";
    echo "<ul><li>$c[0]</li>";
    echo "<li>$c[1]</li>";
    echo "<li>$c[2]</li></ul>";
}
?>