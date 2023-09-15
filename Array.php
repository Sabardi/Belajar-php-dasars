<?php 
/** Array adalah variabel khusus yang dapat menampung lebih dari satu nilai dalam satu waktu.
 * 
 */

 $Ikan = ["Cupang","Arwana","Koi"];
$length = count($Ikan);

for ($i=0; $i < $length ; $i++) {
    # code...
    echo $Ikan[$i];
    echo "<br>";
}

    //sata 1 dimensi / numrik
$data = [1,2,3];
    echo $data[1];
$data2 = [
        [1,2,3],[14,5,6],[6,7,8]
    ];
    echo "<br>";
    echo $data2[0][2];

    echo "<br>";
    
    $Buah = ["Apel","Jeruk","Mangga"];
    echo count($Buah);
    echo "<br>";
    echo $Buah[0];
    echo $Buah[1];
    echo $Buah[2];
    ?>