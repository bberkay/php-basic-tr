<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table tr td{
        padding:10px;
    }
    </style>
</head>
<body>
    <h1>Örnek Sınav Soruları</h1>
    <hr>
    
    <!-- ======================== SORU 1 - EXPLODE ======================== -->
    <h2>Soru 1 - Explode</h2>
    <p>Formdan girilen cümleyi veya paragrafı kelimelere bölüp her birine teker teker erişebilen fonksiyon</p>
    <h3>Cevap</h3>
    <form action="ornek_sinav.php" method = "GET"> <!-- form, gönder butonuna tıklandıktan sonra ornek_sinav.php ye GET metodu ile yönlendirilsin -->
        <textarea name="metin" placeholder = "Metin Giriniz..."></textarea>
        <input type="submit" name = "butona_tiklandi_1">
    </form>

    <?php 
    if(isset($_GET['butona_tiklandi_1'])){ // URL kısmına butona_tiklandi_1 geldi ise altındaki kodları çalıştır
        function kelimeAyrac($metin){ // kelimeAyrac adında bir fonksiyon oluşturduk ve gelen parametreyi($_GET['metin']) $metin değişkenine eşitledik.
            $metin = explode(" ",$metin); // parametreden gelen $metin değişkenini boşluklara(" ") göre ayırdık ve tekrar $metin değişkenine eşitledik.
            return $metin; // $metin değişkenini fonksiyonun sonucu yaptık. Not: metin değişkeni parçalara ayrıldığından dolayı array(dizi) olarak fonksiyonun sonucu oldu.
        }
        $yeni_kelimeler = kelimeAyrac($_GET['metin']); // kelimeAyrac fonksiyonunu çağırıp parametre olarak URL den gelen mesaj kısmını gönder ve fonksiyondan gelen $metin değerinin $yeni_kelimeler değişkenine eşitle.
        echo "Türü: ".gettype($yeni_kelimeler)."<br>"; // $yeni_kelimeler değişkeninin türüne gettype fonksiyonu ile bakıyoruz.
        echo "<br>";
        print_r($yeni_kelimeler); // $yeni_kelimeler değişkeni bir array(dizi) olduğundan print_r ile yazdırmalıyız.
        echo "<br>";
        echo "<br>Sonuç: ";
        // $yeni_kelimeler dizisi içindeki tüm kelimeleri $kelime şeklinde echo ile ekrana yazdırıyoruz.
        foreach($yeni_kelimeler as $kelime){ // $yeni_kelimeler değişkeni bir array(dizi) olduğundan foreach ile yazdırıyoruz.
            echo $kelime." ";
        }
    }
    ?>
    <hr>

    <!-- ======================== SORU 2 - DATETIME ======================== -->
    <h2>Soru 2 - Datetime</h2>
    <p>Formdan girilen tarihi güne ve saate çeviren fonksiyonu yazınız.</p>
    <h3>Cevap</h3>
    <form action="ornek_sinav.php" method = "GET"> <!-- form, gönder butonuna tıklandığında ornek_sinav.php ye GET methodu ile yönlendirilsin -->
        <input type="datetime-local" name = "tarih">
        <input type="submit" name = "butona_tiklandi_2">
    </form>

    <?php
    if(isset($_GET['butona_tiklandi_2'])){ // URL kısmına butona_tiklandi_2 geldi ise altındaki kodları çalıştır
        function tarih_bol($parametre_zaman){
            $parametre_zaman = explode("T",$parametre_zaman); // $paramatre_zaman değişkenini T ye göre ikiye böldük;
            print_r($parametre_zaman); // String(metinsel) bir ifade olan $paramtere_zaman değişkenini boşluğa göre ayırdığımız için array e dönüştü.
            $tarih = $parametre_zaman[0]; // String(metinsel) tarihin T den önceki kısmı d-m-y olduğu için array in ilk elemanı(sıfırınca) tarih oldu. 
            $saat = $parametre_zaman[1]; // String(metinsel) tarihin T den sonraki kısmı h:i:s olduğu için array in ikinci elemanı(birinci) saat oldu.
            return array($tarih,$saat);
        }
        echo "<br>";
        $zaman_dizisi = tarih_bol($_GET['tarih']); // tarih_bol fonksiyonuna GET methodu ile formdan gönderdiğimiz tarih bilgisini gönderdik ve fonksiyon bize tarih ve saati array(dizi) olarak döndürdü. Biz ise bu array(dizi) i $zaman_dizisi değişkenine eşitledik. 
        $tarih = $zaman_dizisi[0]; // $zaman_dizisi değişkenin ilk elemanı(sıfırıncı) tarih olduğu için ilk elemanı $tarih değişkenine eşitledik.
        $saat = $zaman_dizisi[1]; // $zaman_dizisi değişkeninin ikinci elemanı(birinci) saat olduğu için ikinci elmanı $saat değişkenine eşiltedik.
        echo "<br>";
        echo "<br>";
        echo "Tarih: ".$tarih;
        echo "<br>";
        echo "Saat: ".$saat;
    }
    ?>
    <hr>

    <!-- ======================== SORU 3 - FAKTORİYEL ======================== -->
    <h2>Soru 3 - Faktoriyel</h2>
    <p>Formdan girilen sayının faktoriyelini alan recursive fonksiyonu yapınız.</p>
    <h3>Cevap</h3>

    <form action="ornek_sinav.php" method = "GET">  <!-- form, gönder butonuna tıklandığında ornek_sinav.php ye GET methodu ile yönlendirilsin -->
        <input type="number" name = "sayi">
        <input type="submit" name = "butona_tiklandi_3">
    </form>
    
    <?php
    if(isset($_GET['butona_tiklandi_3'])){ // URL kısmına butona_tiklandi_3 geldi ise altındaki kodları çalıştır
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
        $sonuc = faktoriyel($_GET['sayi']); // form dan aldığımız 'sayi' adındaki sayıyı faktoriyel fonksiyonuna gönderdik ve fonksiyonun bize döndürdüğü $sonuc değişkenini kendi $sonuc değişkenimize eşitledik.
        echo "<br>Sonuç: ".$sonuc;
    }
    ?>
    <hr>

    <!-- ======================== SORU 4 - TABLO İLE FOR DÖNGÜSÜ ======================== -->
    <h2>Soru 4 - Tablo İle For Döngüsü</h2>
    <p>Tablo içinde a dan z ye tüm alfabeyi, sırasını ve sayacı kadar nokta koyma programını yapınız</p>
    <h3>Cevap</h3>
    <?php
    $harf = 'a'; // alfabe $harf değişkenine eşit olacak
    $satir = 26; // 26 satır alfabadeki 26 harf için (q,x,w dahil)
    $nokta = "."; // noktalar da $nokta değişkenine eşit olacak.
    ?>
    <table border = "1" style = "border-collapse:collapse;">
        <tr>
            <!-- Sütün Başlıkları -->
            <td>HARFLER</td>
            <td>SAYI</td>
            <td>NOKTA</td>
        </tr>
        <?php for($i = 1;$i<=$satir;$i++){ ?><!-- $satir sayısı kadar tablo da satır oluşturmak için döngü kurduk. -->
            <tr>
                <td><?php echo $harf ?></td> <!-- Satırlara harfi yazdık -->
                <td><?php echo $i ?></td> <!-- Satırlara harflerin sırasını yazdık -->
                <td> 
                    <?php
                    for($k = 1;$k<=$i;$k++){ // harflerin sırası kadar nokta koymak için döngü oluşturduk ve bu döngüyü $i yani mevcut satır konumu kaç ise o kadar döndürmesini istedik.
                        echo ".";
                    }
                    $harf++; // Harfi ilerletmek için bir arttırdık. a ise b olsun.
                    ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <hr>
    
    <!-- ======================== SORU 5 - FORM İLE BİLGİ ÇEKME ======================== -->
    <h2>Soru 5 - Form ile Kullanıcı Bilgisi Çekme</h2>
    <p>Form kullanarak kullanıcının girdiği bilgileri farklı bir sayfada gösterin.</p>
    <h3>Cevap</h3>
    <?php
    $okullar = array("KARTALMTAL","İMKB","KUCUKYALIMTAL","SÜLEYMAN DEMİRAL","HANDAN HAYRETTİN");
    ?>
    <form action="kullanici_bilgileri.php" method = "POST"> <!-- form, gönder butonuna tıklandığında kullanici_bilgileri.php sayfasına POST methodu ile git -->
      <input type="textbox" name = "isim" placeholder = "İsim Giriniz..."><br>
      <input type="email" name = "email" placeholder = "E Mail Giriniz..."><br>
      <input type="password" name = "parola" placeholder = "Parola Giriniz..."><br>
      <input type="number" name = "yas" placeholder = "Yaşınızı Giriniz..."><br>
      <input type="radio" name = "cinsiyet" placeholder = "Cinsiyetinizi Giriniz" value = "Erkek">
      <label for="">Erkek</label><br>
      <input type="radio" name = "cinsiyet" placeholder = "Cinsiyetinizi Giriniz" value = "Kadın">
      <label for="">Kadın</label><br>     
      <!-- 
           dil inputlarının name'ine '[]' ekliyoruz çünkü birden fazla seçilebilir 
           fakat bu şekilde $_POST methodu ile alırken bize dizi halinde gelecek bizde foreach ile 
           bu diziyi ayırıcaz.
      -->
      <input type="checkbox" name = "dil[]" value = "Almanca"> 
      <label for="">Almanca</label><br> 
      <input type="checkbox" name = "dil[]" value = "İngilizce">
      <label for="">İngilizce</label><br> 
      <input type="checkbox" name = "dil[]" value = "Çince">
      <label for="">Çince</label><br> 
      <select name="okul">
            <?php foreach($okullar as $okul) { ?> <!-- $okullar dizisi içindeki tüm okulları $okul değişkenine eşitle ve o şekilde option içine yazdır -->
                <option value="<?php echo $okul ?>"><?php echo $okul ?></option>
            <?php } ?> <!-- foreach kapatıcı süslü parantezi bu yüzden burada php etiketi açıldı ve parantez php etiketleri arasına alındı -->
      </select><br>
      <textarea name="aciklama" placeholder = "Açıklamanızı Giriniz..."></textarea><br>
      <input type="submit" value = "Gönder" name = "butona_tiklandi_4">
      <input type="reset" value = "Temizle">
    </form>
    <hr>
</body>
</html>