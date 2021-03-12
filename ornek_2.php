<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Örnek 2 - Select, Option Örneği</h1>
    <hr>
    <?php
    // ====================SELECT OPTION FORM ÖRNEĞİ==================== //
    // $ogrenciler adında bir dizi oluşturuyoruz ve içine bazı değerler ekliyoruz.
    echo "<select>";
        for($i = 1;$i<=10;$i++){ // 1 den 10 a kadar olan sayıları option a yazdır.
            echo "<option>".$i."</option>"; 
        }
    echo "</select>";
    ?>

    <h2>Örnek Soru</h2>
    <p></p>
    <?php
    $ogrenciler = array("Eda SEVİM","Özgür YILMAZ","Bilge GÜNEL","Nur YERLİ","Caner TAŞ");
    ?>

    <form action="ornek_2.php" method = "GET">
        <select name="veri">
            <?php 
            // $ogrenciler dizisindeki tüm değerleri $ogrenci şeklinde ne kadar öğrenci varsa o kadar option oluşturarak yazdır
            foreach($ogrenciler as $ogrenci) { ?>
                <option>
                    <?php echo $ogrenci ?>
                </option>
            <?php } ?>       
        </select>
        
        <input type="submit" value = "Seç" name = "butona_tiklandi"> 
    </form>

    <?php

    if(isset($_GET['butona_tiklandi'])){
        ?><p style = "color:green">SEÇİM BAŞARI İLE GELDİ : <?php echo $_GET['veri']; ?></p> <!-- GET metodu ile gelen 'veri' adlı select yapısının içinden seçilen option ı yazdır. -->
    <?php } ?> 

    
    

</body>
</html>