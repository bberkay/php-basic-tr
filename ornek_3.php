<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Örnek 3 - Explode - İmplode Örneği</h1>
    <hr>
    <?php
    // IMPLODE, EXPLODE FONKSİYONLARI NEDİR //
    // implode("ne ile birleştireceksin",$degisken) -> array(dizi) içindeki elemanları birleştirerek string(metinsel) bir ifadeye dönüştürür.
    // gettype($degisken) -> içine yazılan $degisken in türünü döndürür.
    // explode("neye göre ayıracaksın",$degisken) -> içine yazılan $degisken i 

    // -------------- Implode -------------- //
    echo "<h3>Implode</h3>";
    $dizi = array("a","b","c");
    echo gettype($dizi)." : "; // Dizinin Türünün Yaz.
    print_r($dizi); // array i yazdırmak için print_r komutu kullanılır.
    
    echo "<br>";

    $yeni_dizi = implode("-",$dizi); // Diziyi '-' ile birleştir. Not : '-' göre birleştirmek yerine başka bir şeye(virgül, iki nokta vb.) göre de birleştirilmesini isteyebilirsiniz.
    echo gettype($yeni_dizi)." : ".$yeni_dizi;

    // -------------- Explode -------------- //
    echo "<h3>Explode</h3>";
    $metin = "kelime1 kelime2 kelime3 kelime4 kelime5 kelime6";
    echo gettype($metin)." : ".$metin;

    echo "<br>";
    
    $yeni_metin = explode(" ",$metin); // String(metinsel) ifadeyi boşluklara göre ayır. Not : " " yerine başka bir şeye(virgül,iki nokta vb.) göre de ayırılmasını isteyebilirsiniz.
    echo gettype($yeni_metin)." : ";
    print_r($yeni_metin);
    ?>
    
    <!--  ============================ ÖRNEK SORU ============================ -->
    <h2>Örnek Soru</h2>
    <p>Verilen cümleyi veya paragrafı kelimelere bölen fonksiyon</p>
    <?php
    function kelime_ayrac($cumle){ // keliem_ayrac adında bir fonksiyon oluşturuyoruz ve içine bir parametre($cumle) yazıyoruz bu fonksiyona gelen parametreler $cumle ye eşit oluyor.
        $cumle = explode(" ",$cumle); // parametre olarak gelen $cumle değişkenini boşluklara göre parçalayıp tekrar $cumle değişkenine eşitliyoruz. Parçalama işlemi yüzünden $cumle değişkeni array(dizi) oluyor.
        return $cumle; // $cumle değişkenini fonksiyonun sonucu halini getiriyoruz.
    }
    $cumle = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt cumque dolore incidunt expedita nobis reprehenderit sed libero maiores ipsum eius. Laudantium alias omnis, aperiam voluptatem nesciunt deleniti mollitia obcaecati minima?";
    $dizi = kelime_ayrac($cumle); // yukarıdaki $cumle değişkenini(Lorem ipsum dolar...) yazdığımız fonksiyona parametre olarak gönderiyoruz ve fonksiyonun return ettiği sonuç bizim $deger değişkenimize eşitleniyor.
    print_r($dizi); // yukarıdaki fonksiyon sonucu array(dizi) olarak döndürdüğünden $dizi değişkenimizin türü array oluyor bu sebeple print_r ile yazdırıyoruz.
    
    ?>

    

</body>
</html>
