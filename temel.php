<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Temel - PHP ile HTML ı bir arada kullanmak</h1>
    <hr>
    <?php
    // <?php şeklinde php etiketi açılır.
    // ? > şeklinde(soru işareti ile büyüktürün arasında boşluk olmayacak) php etiketi kapatılır.
    // HTML arasında yazacağımız php kodları için php etiketlerini açıp kapatmamız gerekir.
    // HTML dosyamızda php yazmamız için dosyamızın uzantısının .php olması gerekir.
    ?>

    <!-- Not: Şuan PHP etiketleri arasında olmadığımızdan dolay yorum satırı bu şekilde açılıyor --> 
    <p>Hello World! by HTML</p> <!-- Sadece HTML -->
    <p>  
        <?php 
            // Not: Şuan php etiketleri arasında olduğumuz için yorun satırı '//' şeklinde açılıyor.
            echo "Hello World! by PHP "; // PHP etiketli ile p etiketinin arasına yazı yazdırmak için p etiketinin içine önce
            // php etiketi açıyoruz daha sonradan normal php de yaptığımız gibi echo komutu ile istediğimiz yazıyı yazıp php etiketini kapatıyoruz.
        ?>
    </p>
    
    <!--  ============================ ÖRNEK SORU ============================ -->
    <h2>Örnek Soru</h2>
    <!-- HTML ve PHP etiketleri ile table yapımı -->
    <table border = "1">
        <?php
            for($i=1;$i<=5;$i++){ // 5 kez dönen döngü yaptık. Bu döngü her döndüğünde bir tr oluşturacak.
                ?> 
                <tr>
                    <?php 
                    for($j=1;$j<=10;$j++){ // 10 kez dönen döngü yaptık. Bu döngü her döndüğünde bir td oluşturacak.
                        ?> <!-- Burada php etiketini kapattık çünkü sırada td etiketini yazmamız gerekiyor. -->
                        <td> 
                            <?php 
                                echo $j; // Burada php etiketlerini tekrar açtık çünkü td lerin içine kaçıncı td olduklarını php ile yazdırıyoruz. 
                            ?>
                        </td>
                    <?php } // burada php etiketini tekrar açtık çünkü ikinci for döngüsünün kapatıcı süslü parantezini php etiketleri arasına almamız lazım
                    ?>
                </tr> <!-- burada php etiketini kapattık çünkü şimdi tr etiketini yazıcaz. HTML etiketlerini yazmadan önce php etiketlerini kapatmamız gerekiyor.
            <?php } // Burada php etiketini açtık çünkü for döngüsünün kapatıcı süslü parantezini php etiketleri arasına almamız gerekiyor.
        ?>
    </table>
    
    

</body>
</html>
