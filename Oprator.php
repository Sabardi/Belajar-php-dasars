<?php 
/*oprator artimatika 
* perkalian
/ pembagian
- pengurangan
+ penjumlahan
% medulo atau hasil bagi
** exponenent
*/
// opratoe aritmatika start
$a = 10;
$b = 10;

$total = $a + $b;
$total1 = $a - $b;
$total2 = $a * $b;
$total3 = $a / $b;
$total4 = $a % $b;
$total5 = $a ** $b;

echo ("Hasil  $a +  $b : $total <br>");
echo "Hasil  $a -  $b : $total1 <br>";
echo "Hasil  $a *  $b : $total2 <br>";
echo "Hasil  $a /  $b : $total3 <br>";
echo "Hasil  $a  % $b : $total4 <br>";
echo "Hasil  $a ** $b : $total5 <br>";

// opratoe aritmatika end
//oprator perbandigan start
echo "oprator perbandingan <br>";
/* 
== sama dengan
=== identik atau sama 
!= tidak sama
!== tidak sama dengan
> lebih besar
< lebih kecil
>= lebih besar sama dengan
<= lebih kecil sama dengan 
*/

$a = 100;
$b = 10;

$Aritmatika = $a == $b;
$Aritmatika1 = $a === $b;
$Aritmatika2 = $a != $b;
$Aritmatika3 = $a !== $b;
$Aritmatika4 = $a > $b;
$Aritmatika5 = $a < $b;
$Aritmatika6 = $a >= $b;
$Aritmatika7 = $a <= $b;

echo "Perbadingan $a == $b  :  $Aritmatika <br>";
echo "Perbadingan $a === $b  :  $Aritmatika1 <br>";
echo "Perbadingan $a != $b  :  $Aritmatika2 <br>";
echo "Perbadingan $a !== $b  :  $Aritmatika3 <br>";
echo "Perbadingan $a > $b  :  $Aritmatika4 <br>";
echo "Perbadingan $a < $b  :  $Aritmatika5 <br>";
echo "Perbadingan $a >= $b  :  $Aritmatika6 <br>";
echo "Perbadingan $a <= $b  :  $Aritmatika7 <br>";

 //oprator perbandigan end

 //logic operator start
 /* 
 and = dan => apakah angka 100 dan 1o sama = cek kondisi nya kemudian logic oprator nya
 or = atau => jika salah satu nya benar maka itu benar
xor = benar jika x atau y, tetapi tidak kedua nya
&& = jika kedua nya benar maka benar = kondisi nya harus sama sama benar
|| = or => benar jika salah satu nya benar
! = benar jika $x nya tidak benar, dan jika benar mk salah
 */

$x = 100;
$y = 10;
 if ($x == 100 and $x = 10) {
    # code...
    echo "and Hello word!";
}
else {
    echo "or cek lagi ";
}
echo "<br>";

if ($x == 100 xor $x = 10) {
    # code...
    echo "or Hello word!";
}
else {
    echo "or cek lagi";
}

echo "<br>";

if ($x == 100 && $x == 10) {
    # code...
    echo "&& benar";
}
else {
    echo "&& salah";
}

echo "<br>";

if ($x == 100 || $x == 10) {
    # code...
    echo " ||benar";
}
else {
    echo "|| salah";
}

echo "<br>";

if ($x !== 90) {
    # code...
    echo " != benar";
}else {
    echo "!= salah";
}
//logic operator end


?>