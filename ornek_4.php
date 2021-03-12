<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Örnek 4 - Tarih İşlemleri</h1>
    <hr>
    <?php
    // DATE FONKSİYONLARI NEDİR //
    // date_default_timezone_set("Europe/Istanbul"); -> tarihi istanbul a göre ayarlama eğer bu kod yazılmaz ise tarih londra' ya göre çalışır.
    // date("d-m-y h:i:s"); -> Gün-Ay-Yıl Saat:Dakika:Saniye şeklinde tarih döndürür(24-12-2021 11:59:30).

    // -------------- Date Konu Anlatımı -------------- //
    echo "<h3>Date</h3>";
    date_default_timezone_set("Europe/Istanbul");
    echo "Tarih: ".date("d-m-y h:i:s");
    ?>

    <!--  ============================ ÖRNEK SORU ============================ -->
    <h2>Örnek Soru</h2>
    <p>Tarihi, Güne ve Saat e göre bölen fonksiyonu yazınız.</p>
    <!-- Not: Fonksiyon yazmak için örnek_5.php ye bakınız. -->
    <?php
    function tarih_bol($parametre_zaman){
        $parametre_zaman = explode(" ",$parametre_zaman); // $paramatre_zaman değişkenini boşluğa göre ikiye böldük;
        print_r($parametre_zaman); // String(metinsel) bir ifade olan $paramtere_zaman değişkenini boşluğa göre ayırdığımız için array e dönüştü.
        $tarih = $parametre_zaman[0]; // String(metinsel) tarihin boşluk dan önceki kısmı d-m-y olduğu için array in ilk elemanı(sıfırınca) tarih oldu. 
        $saat = $parametre_zaman[1]; // String(metinsel) tarihin boşluk dan sonraki kısmı h:i:s olduğu için array in ikinci elemanı(birinci) saat oldu.
        return array($tarih,$saat);
    }
    $zaman = date("d-m-y h:i:s");
    $zaman_dizisi = tarih_bol($zaman);
    $tarih = $zaman_dizisi[0];
    $saat = $zaman_dizisi[1];
    echo "<br>";
    echo "Tarih: ".$tarih;
    echo "<br>";
    echo "Saat: ".$saat;
    ?>
    

</body>
</html>
