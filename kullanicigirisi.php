<?php 
$girisdurumu="";
$kullanici="";
$sifre="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $kullanici=isset($_POST["kullanici"])?$_POST["kullanici"]:"";
    $sifre=isset($_POST["sifre"])?$_POST["sifre"]:"";
if($kullanici=="melike" && $sifre=="2354"){
    //1 saat boyunca geçerli cookie ayarladım
    setcookie("kullanici_adi", $kullanici,time()+3600);
  $girisdurumu="giris basarili. hos geldin $kullanici";
}
else{
    $girisdurumu="hatali giris";
}if ($girisdurumu != "") {
    echo '<p style="color:red;">' . $girisdurumu . '</p>';
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giriş sayfası</title>
</head>

<body>
<h2>giriş yap</h2>

<form action="kullanicigirisi.php" method="post">
    <label>kullanici girisi:</label>
    <input type="text" name="kullanici" value="<?php echo $kullanici;?>"><br>
    <label>sifre:</label>
    <input type="password" name="sifre"><br>
    <input type="submit" value="giris">
</form>    
</body>
</html>