<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Örnek 1 - Basit Form Örneği</h1>
    <hr>
    <?php
    // ====================FORM NEDİR==================== //
    // GET -> GET methodun da form ile gönderilen bilgiler URL kısmında gözükür.
    // POST -> POST methodun da form ile gönderilen bilgiler URL kısmında gözükmez. Post, Get e göre daha güvenlidir.
    // action -> formun gönder butonuna basıldıktan sonra nereye gideceği.
    // method -> formun gönder butonuna basıldıktan sonra hangi method ile gideceği(GET veya POST).
    // name -> input,select,textarea gibi form elemanlarının içindeki verilerin formun gönderi butonuna
    // basıldıktan sonra gideceği isim veya eşiti.
    ?>
    
    <!--  ============================ HTML ============================ -->
    <form action="ornek_1.php" method = "GET">
        <input type="textbox" name = "isim" placeholder = "İsim Giriniz...">
        <br> <!-- br -> boşluk bırak -->
        <input type="password" name = "parola" placeholder = "Parola Giriniz...">
        <br>
        <input type="email" name = "email" placeholder = "E Mail Giriniz...">
        <br>
        <textarea name="mesaj" placeholder = "Mesajınızı Giriniz..."></textarea>
        <br>
        <!-- ornek_1.php sayfasına 'secildi' haberini ver ve get metodhu ile bunu URL de göster. -->
        <input type="submit" value = "Seç" name = "butona_tiklandi"> 
    </form>

    <!--  ============================ PHP ============================ -->
    <?php
    if(isset($_GET['butona_tiklandi'])){ // URL kısmına 'butona_tiklandi' geldi ise
        ?>
        <h3>GET İLE GELEN BİLGİLER</h3> <!-- POST ile yapmak istersek sayfadaki tüm get leri post olarak değiştirebiliriz. -->
        <!-- GET metodu ile yukarıda girdiğimiz veriler url kısmına name'lerin de yazan değişkenlerin eşiti olarak geldi. -->
        <p style = "color:green">İsim: <?php echo $_GET['isim']; ?></p> 
        <p style = "color:green">Parola: <?php echo $_GET['parola']; ?></p> 
        <p style = "color:green">E Mail: <?php echo $_GET['email']; ?></p> 
        <p style = "color:green">Mesaj: <?php echo $_GET['mesaj']; ?></p> 
    <?php } ?> 

    
    

</body>
</html>
