<?php 
//perulangan for start
/* while = loop melalui blok kode selama kondisi yang ditentukan benar
do ..while = mengulang satu blok kode satu kali, lalu mengulangi perulangan selama kondisi yang ditentukan benar
for = mengulang satu blok kode satu kali, lalu mengulangi perulangan selama kondisi yang ditentukan benar
foreach = loop melalui blok kode untuk setiap elemen dalam array
 */
for ($data = 0; $data < 10 ; $data++) { 
    # code...
    echo "ulangi $data <br> ";
}

//perulangan for end

echo "<br>";
// perulangan while start
$b = 1;
while ($b <= 10) { # <= (b lebih kecil sama dengan 10 mksd nya perulangan nya nyampai 10. dan jk menggunakan lebih kecil (<) maka nilai nya sampai 9
    # code...
    echo "hallo $b<br>";
    $b++;
} 
// perulangan while end
echo "<br>";
// perulangan do..while Start

$c = 1;
do { #ini akan di jalankan jika nilai nya benar 
    # code...
    echo "ulangi saya $c <br>";
    $c++;
} while ($c < 10); #di lakukan pengecekan terhadap perbandingan nya
echo "stop ulang";
// perulangan do..while end

echo "<br>";

// perulangan foreach biasa start
$warna = ["red","merah", "blue","biru"];
foreach ($warna as $collors){
    echo "ini warna $collors <br>";
}
// perulangan foreach end
echo "<br>";
// perulangan foreach asosiatifarray start
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) { # x ini adalah inisialisai dari age, dan val untuk memeanggil value nya
  echo "$x = $val<br>";
}

// perulangan foreach asosiatifarray end

// menggunakan break di gunakan di perulangan dan di luar switc 

for($a = 1 ; $a < 10; $a++){
    if($a == 5){
        break;
    }
    echo "ulangi sampai $a <br>";
}



?>