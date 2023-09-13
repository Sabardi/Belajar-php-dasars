<?php 
// Variable dan Tipe data start
echo "hello word <br>";
echo " tipe data string ";
echo "hello word <br>";
$Nama = "sabardi";
$Alamat = "Bagu";
$Umur = 10;

$Biodata = "Nama : $Nama,<br>  Alamat : $Alamat, <br> Umur : $Umur <br> ";
echo $Biodata; 
// Variable dan Tipe data end

//integer start
echo "// tipe data integer <br> ";
$x = 20;
$y = 10;
$total = $x +$y;
echo "Total x dan y adalah =  $total <br>";
echo "// tipe data float <br>";
$a = 20.36;
$b = 10.7690;
$totals = $a + $b ;
echo $totals;
//integer end

//array start
echo "// array <br>"; 
$Data = [
    [1,2,3,4],
    [6,7,8,9]
];
echo $Data[0][3] ;

// array end

//array numrik
$Nama = [
    [["x","c","k"],["b","d","s"]],
    [["x","y","d"], ["s","d","a"]]
];

echo "<br>";
echo $Nama[1][0][1];

?>
