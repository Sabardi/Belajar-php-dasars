<?php 
/* 
if stattment => digunakan hanya jika ada satu tindakan
if else =>  jk kondisi nya bernilai salah maka blok else akan di jln kan jika benar blok if yang akan di jln kan
if elseif else => memiliki lebih dari dua pilihan kondisi.
switch => adalah bentuk lain dari percabangan If/Elseif/Else.
*/

$umur = 19;

//if
if ($umur < 20) { #jika nilai nya mememnuhi (cek kondisi nya) target anda lolos jika tidak gagal
    # code...
    echo  "anda berhasil lolos <br>";
}
else {
    echo "anda gagal coba lagi <br>";
}

//if/else

if ($umur > 20) { #jika nilai nya mememnuhi (cek kondisi nya) target anda lolos jika tidak gagal
    # code...
    echo  "anda berhasil lolos <br>";
}
else {
    echo "anda gagal coba lagi thn depan <br>";
}

//if elsefi else

if ($umur < 19) {
    # code...
    echo "anda berhasil lolos <br>";
}elseif ($umur >=16 && $umur <=19 ) {
    # code...
    echo "anda masih sma <br>";
}elseif($umur <=15 && $umur >=13 ){
    echo "anda masih smp <br>";
}else {
    echo "silahkan cek umur anda <br>";
}

//switch

switch ($umur) {
    case 18:
        # code...
        echo "sma";
        break;
    case 15:
        # code...
        echo "smp";
        break;
    case 12:
        # code...
        echo "sd";
        break;
    
    default:
        # code...
        echo "kamu orang tua";
        break;
}


?>