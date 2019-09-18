<?php
$indo = 110;
$mtk = 0;
$rata = ($indo + $mtk)/2;
$a = "Maaf nilai yang anda masukan tidak sesuai!";

if($indo>100||$mtk>100||$indo<0||$mtk<0||$rata>100||$rata<0){
    $rata = $a;
    $b = $a;
}
else if($rata>85){
    $a = "A";
    $b = "Lulus";
}
else if($rata>=75){
    $a = "B";
    $b = "Lulus";
}
else if($rata>60){
    $a = "C";
    $b = "Tidak Lulus";
}
else{
    $a = "D";
    $b = "Tidak Lulus";
}
echo "Nilai B.Indonesia = $indo<br>";
echo "Nilai Matematika = $mtk<br>";
echo "Nilai Rata-Rata = $rata<br>";
echo "Keterangan = $b<br>";
echo "Grade = $a";
?>