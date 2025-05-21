<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gezdiginiz sehirler</title>
</head>
<body>
    <h1>gezdiğiniz şehirler</h1>
    <?php 
    $sehirsayisi=intval($_POST["sehirsayisi"]);
    echo "<p> bu yıl $sehirsayisi şehir gezmişşiniz </p>";
    for($i=1;$i<=$sehirsayisi;$i++){
       echo "<img src='https://picsum.photos/seed/sehir$i/200/150' alt='Şehir $i' style='margin: 10px;' />";

    }
    ?>
</body>
</html>