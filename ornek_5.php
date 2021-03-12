<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Örnek 5 - Fonksiyon Örnekleri</h1>
    <hr>
    <?php
    // ====================FONKSİYON NEDİR==================== //
    // function fonksiyon_adi(){} -> function yazdıktan sonra fonksiyonun adını yazarız.
    // function fonksiyon_adi($parametre){} -> eğer fonksiyona dışarıdan bir parametre göndermek istiyorsak parantez içine gelecek parametrenin
    // fonksiyona geldikten sonra kullanılacak ismini yazarız.
    // fonksiyon_adi(); -> şeklinde fonksiyonu çağırabiliriz.
    // fonksiyon_adi($parametre); -> şeklinde fonksiyona parametre gönderebiliriz.
    // return -> fonksiyonun çağırıldığında da vereceği değer.
    ?>
    <h3>Fonksiyonlar</h3>
    <?php

    // ---------- Tek Değer Döndüren Fonksiyon ----------
    echo "<h4>Tek Değer Döndüren Fonksiyonlar</h4>";
    function toplama($sayi1,$sayi2){ // toplama(4,8) şeklinde gelen sayılar $sayi1 = 4 ve $sayi2 = 8 şekline dönüştü.
        $toplam = $sayi1 + $sayi2; // $sayi1(4) değişkenini $sayi2(8) değişkeni ile topla ve $toplam değişkenine sonucu eşitle.
        return $toplam; // $toplam değişkenini fonksiyonun sonucu olarak belirle.
    }

    /* toplama fonksiyonunu çağır ve $sayi1 parametresine 4 ü, $sayi2 parametresine 8 i gönder.
       toplama fonksiyonu içindeki toplama işlemini yaptıktan sonra sonucu $toplam a eşitlesin ve return etsin(sonucu kayıt etsin ve çağırıldığı değişkene eşitlesin) 
       $sonuc değişkeni ile return edilen $toplam değişkenini eşitle
    */
    $sonuc = toplama(4,8);
    echo "Toplam: ".$sonuc;


    echo "<h4>Birden Fazla Değer Döndüren Fonksiyonlar</h4>";
    // ---------- Birden Fazla Değer Döndüren Fonksiyon ----------
    function toplama_cikarma($sayi1,$sayi2){
        $toplam = $sayi1 + $sayi2;
        $fark = $sayi1 - $sayi2;
        return array($toplam,$fark); // $toplam ve $fark değişkenlerini bir dizi halinde döndürdük.
    }

    // toplama fonksiyonuna 6 ve 5 i gönderdik ardından fonksiyon bize (11,1) şeklinde değer döndürdü.
    $sonuc = toplama_cikarma(6,5); 
    print_r($sonuc);
    $toplam = $sonuc[0];
    $fark = $sonuc[1];

    echo "<br>";
    echo "Toplam: ".$toplam;
    echo "<br>";
    echo "Fark: ".$fark;
    
    ?>

    <h2>Örnek Soru</h2>
    <p>Girilen Sayının faktoriyelini alan recursive fonksiyonu yapınız.</p>
    <?php
    // Faktoriyel 5 : 5*4*3*2*1 = 120 
    $sonuc = 1; // İlk başta $sonuc değişkenini oluşturuyoruz ve bire eşitliyoruz eğer sıfıra eşitlersek sıfırla da çarpılır ve sonuç hep sıfır çıkar.
    function faktoriyel($sayi){ // faktoriyeli alınacak sayıyı $sayi değişkenini eşitliyoruz fakat biz $sayi değişkenini bir nevi sayaç şeklinde kullanıcaz.
        global $sonuc; // global ile fonksiyon dışındaki $sonuc değişkeni kullanabiliriz.
        if($sayi > 1){ // eğer sayacımız($sayi) halâ birden büyükse faktoriyeli almaya devam etsin.
            $sonuc = $sonuc * $sayi; // sayacımızı($sayi) $sonuc değişkeni ile çarpıp sonucu $sonuc değişkenine eşitliyoruz.
            $sayi--; // sayacımızı($sayi) çarpma işlemini yaptıktan sonra bir azaltıyoruz.
            faktoriyel($sayi); // fonksiyonu kendi içinde çağırıp bu sefer parametre  olarak sayacamızın($sayi) bir azaltılmış halini gönderiyoruz.
        }
        return $sonuc; // eğer sayacımız 1 den büyük değilse artık sonucu döndürebiliriz.
    }
    echo "Sonuç: ".faktoriyel(5);
    ?>

</body>
</html>