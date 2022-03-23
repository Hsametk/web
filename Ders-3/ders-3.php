<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Ugulama: Rastgele uretilen sayinin 50 den buyukse
'       Gectiniz-Notunuz:xx
            50 den kucukse:
        kaldiniz-Notunuz:xx -->

    <?php
    $not = rand(10, 100);
    if ($not > +50) {
        echo ("Gectiniz-Notunuz: $not");
    } else {
        echo ("Kaldiniz-Notunuz: $not");
    }

    echo "<h3>Sik Kullanilan String Fonksiyonlar</h3>";
    $yazi = "Aydin Adnan Menderse Univerrsitesi";
    echo gettype($yazi);
    echo "<br> Degisken Icerigi: $yazi (" . gettype($yazi) . ")";

    // icerigin buyuk harfe donusturulmesi
    echo "<br> \$yazi iceriginin buyuk harfle yazilmasi:" . strtoupper($yazi);
    echo "<br> \$yazi iceriginin buyuk harfle yazilmasi:" . $buyuk_yazi = mb_strtoupper($yazi);

    // icerigin kucuk harfe donusturulmesi
    echo "<br> \$yazi iceriginin kucuk harfle yazilmasi:" . $kucuk_yazi = strtolower($buyuk_yazi);

    // icerigin ılk  harfının Buyuk Harfe Donusturulmesi
    echo "<br> \$yazi iceriginin ilk harfinin,Buyuk yazilmasi:" . $ilk_yazi = ucfirst($kucuk_yazi);

    // icerigin Tum Kelimelerinin Ilk harfının Buyuk Harfe Donusturulmesi
    echo "<br> \$yazi iceriginin Tum Kelimelerinin Ilk harfının Buyuk Harfle yazilmasi:" . $kelime = ucwords($kucuk_yazi);

    //icerigin Harf Sayisi:
    echo "<br> \$yazi Icerisindeki hars Sayisi:" . strlen($yazi);

    //Asci Char Karsiligi:
    echo "<br> Karakter Karsiligi" . chr(109);
    echo "<br> Karakter Karsiligi" . chr(64);
    //Uygulama 32-255 char kar;iliklari:
    echo "<br >Ascii Karakterleri:";
    for ($i = 32; $i <= 255; $i++) {
        echo "$i" . chr($i) . "-";
    }

    //Metnin parcalanarak diziye donusturulmesi
    $dizi = explode(" ", $yazi);
    echo "<br>";
    print_r($dizi);

    //Uygulama Paragraftaki Kelime Ve Cumle Sayilarini alt alta yazdiriniz
    $metin = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magni explicabo nobis qui deserunt 
    libero, vel architecto tenetur illum veniam doloremque ducimus dolores eius cupiditate ab et asperiores impedit. Error? Lorem ipsum dolor, 
    sit amet consectetur adipisicing elit. Ipsum ipsa corporis fugiat illo harum voluptas nam debitis commodi voluptates? Quam ad, fugiat laudantium
    in ea modi architecto officiis odit natus!";

    $kelimelerDizisi = explode(" ", $metin);
    $cumlelerDizisi = explode(".", $metin);

    echo "<br>Kelime Sayisi" . count($kelimelerDizisi);
    echo "<br>Cumle Sayisi" . count($cumlelerDizisi);
    echo "<br>";
    /* Uygulama
    Veri tabanindan gelen 2021-12-25 degerini 19-12-2021 seklinde ekrana yazdiriniz.*/
    $tarih = "2021-12-25";
    $yenitarih = explode("-", $tarih);
    echo $yenitarih[2]. "-". $yenitarih[1]." -". $yenitarih[0];
    echo "<br>";
    //Dizinin metne donusturulmesi(implode)
    $aylar =["Ocak","Subat","Mart","Nisan","Mayis"];
    print_r($aylar);
    $aylarString= implode(" ",$aylar);
    echo $aylarString;

    //Verilen bir metnin belirten sayi kadar ayrilarak bir dizi iceriginde aktarilmasi. Eger sayi belirtilmez ise o metmni harf harf boler
    //str_split()
    echo "<br>";
    $iban= "TR0010002000300040005000";
    $ibanYeni=str_split($iban,4);
    print_r($ibanYeni);
    echo"<br>";
    foreach ($ibanYeni as $parca) {
        echo "$parca";
    }
     //Trım- Substr 


    ?>
</body>

</html>