<?php 
/*oprator artimatika 
* perkalian
/ pembagian
- pengurangan
+ penjumlahan
% medulo atau hasil bagi
** exponenent
*/
$input;
if (!empty($_POST)){
    $input = $_POST['inputan'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="inputan">Masukan angka pertama</label>  
        <br>
            <input type="number" name="inputan">
            <br>
            
            <label for="inputan">masukan tipe oprator</label>
            <br>
            <input type="text" name="inputan">
            <br>
            
            <label for="inputan">masukan angka ke 2</label>
            <br>
            <input type="number" name="inputan">

            <input type="submit" name="" id="" value="kirim">
    </form>
    
</body>
</html>

