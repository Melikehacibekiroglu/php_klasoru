<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notdeğerlendirme</title>
</head>
<body>
    <h2>Notunuzu buraya girin</h2>
    <form method="post">
        <input type="number" name="not" placeholder="0-100 arası not" required>
        <button type="submit">gönder</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $not=$_POST["not"];
        echo "<hr>";
        echo " girilen not: $not <br>";
       if (100<=$not) {
            echo"geçerli bir not girin.";
        }
        elseif($not<=100 && $not >=90){
            echo"notunuzun harf karşılığı AA.";
        }
        elseif ($not >=80) {
            echo "notunuzun harf karşılığı BA.";
        }
        elseif ($not>=70) {
            echo " notunuzun harf karşılığı BB.";
            # code...
        }
        elseif ($not>=60) {
            echo"notunuzun harf karşılığı CC";
        }
       
        else{
            echo" kaldınız.";
        }
    }
    ?>
</body>
</html>