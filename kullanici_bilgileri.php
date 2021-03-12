<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kullanıcı Bilgileri</h1>
    <hr>
    <?php 
    if(isset($_POST['butona_tiklandi_4'])){ ?> <!-- butona_tiklandi_4 POST methodu geldi ise (URL ile birlikte geliyor fakat POST methodun da URL de gözükmez) -->
        <!-- formun inputlardan gelen bilgiler namelerine eşitlenir ve name ile onların içine yazılan değerlere ulaşabiliriz.
        Örnek Olarak: $_POST['isim'] -> isim textboxt'ının name i isimdir bu sayede o textbox a yazılmış ismi buradan çekebiliriz. -->
        <p>İsim: <?php echo $_POST['isim']; ?></p> 
        <p>E Mail: <?php echo $_POST['email']; ?></p> 
        <p>Parola: <?php echo $_POST['parola']; ?></p> 
        <p>Yaş: <?php echo $_POST['yas']; ?></p> 
        <p>Cinsiyet: <?php echo $_POST['cinsiyet']; ?></p> 
        <p>Diller;</p>
        <?php 
        $diller = $_POST['dil']; // diller birden fazla olabileceği için dizi halinde geliyor o yüzden POST ile gelen dil i $diller değişkenine eşitliyoruz.
        // $diller değişkeni şuan array
        foreach($diller as $dil){ ?> <!-- $diller değişkeni array olduğundan foreach ile $diller değişkeni içindeki tüm değerleri $dil değişkenine eşitledik ve bu şekilde yazdırdık. -->
            <p><?php echo $dil ?></p>
        <?php } ?> <!-- foreach döngüsünün kapatıcı süslü parantezi php etiketlerinin arasına alındı -->
        <p>Okul: <?php echo $_POST['okul']; ?></p>
        <p>Açıklama: <?php echo $_POST['aciklama']; ?></p>
    <?php } ?> <!-- if in kapatıcı süslü parantezi php etiketlerinin arasına alındı -->

</body>
</html>