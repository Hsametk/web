<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-5</title>
</head>

<body>

    <h3>Php'de Diziler Devam </h3>
    <?php

    $isimler = array();
    $isimler[] = "Mehmet";
    $isimler[] = "Canan";
    $isimler[0] = "Kemal";
    $isimler[] = "Nur";

    echo "<pre>";
    print_r($isimler);
    echo "</pre><hr>";


    $isimler2 = array();
    $isimler2["isim1"] = "Mehmet";
    $isimler2["isim2"] = "Canan";
    $isimler2["isim3"] = "Kemal";
    $isimler2[] = "Nur";
    $isimler2[] = "Gülcan";

    echo "<pre>";
    print_r($isimler2);
    echo "</pre>";




    /* Uygulama:
     Çıktı : Havvanur isimli öğrencinin web programlama, veri tabanı, mobil programlama dersleri vardır.  */
    $ogrenciDetay = array(
        "id"        => 1,
        "adi"       => "Havva",
        "soyadi"    => "Yıldız",
        "bolum"     => "Bilgisayar",
        "yas"       => 20,
        "dersler"   => array(
            "ders1" => "Web Programlama",
            "ders2" => "Veri Tabanı",
            "ders3" => "Mobil Programlama"
        ),
        "sınıf"     => 2,
        "memleket"  => "İzmir"
    );

    echo "<pre>";
    print_r($ogrenciDetay);
    echo "</pre> ";

    echo "$ogrenciDetay[adi] $ogrenciDetay[soyadi] isimli öğrencinin " .
        $ogrenciDetay["dersler"]["ders1"] .
        $ogrenciDetay["dersler"]["ders2"] .
        $ogrenciDetay["dersler"]["ders3"] . " dersleri vardır. ";

    echo "<hr>";
    /* 
    Uygulama:
    Aşağıdaki dizinin her elamnı bir öğrenci detayına karşılık gelmektedir.
    Bu öğrencilere ait detayları aşağıdaki şekilde satır satır bir tablo oluşturup içerisine yazdırınız.

    #id    #adi     #soyadi   #bölüm         #dersler               #sınıf
    1     havva     Yıldız    Bilgisayar     Web Programlama           2
                                             Veri Tabanı
                                             Mobil Programlama

    */

   


    echo '<br>';

    $ogrenciDetaylari = array(
        "ogr1" => array(
            "id"        => 1,
            "adi"       => "Havva",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => 20,
            "dersler"   => array(
                "ders1" => "Web Programlama",
                "ders2" => "Veri Tabanı",
                "ders3" => "Mobil Programlama"
            ),
            "sınıf"     => 2,
            "memleket"  => "İzmir"
        ),
        "ogr2" => array(
            "id"        => 2,
            "adi"       => "Kemal",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => 20,
            "dersler"   => array(
                "ders1" => "Donanım",
                "ders2" => "Sunucu",
                "ders3" => "Mobil Programlama"
            ),
            "sınıf"     => 2,
            "memleket"  => "İzmir"
        ),
        "ogr3" => array(
            "id"        => 3,
            "adi"       => "Kerim",
            "soyadi"    => "Yıldız",
            "bolum"     => "Matematik",
            "yas"       => 25,
            "dersler"   => array(
                "ders1" => "Cebir",
                "ders2" => "Homotopi Teori",
                "ders3" => "Homolojik Cebir"
            ),
            "sınıf"     => 4,
            "memleket"  => "Afyon"
        )
    );

    echo "<pre>";
    print_r($ogrenciDetaylari);
    echo "</pre>";
    echo "<hr>";
    echo "<h3>Odev</h3>";
 
    echo "<table border=1>
    <tr>
    <td>#id</td>
    <td>#adi</td>
    <td>#soyadi</td>
    <td>#bölüm</td>
    <td>#dersler</td>
    <td>#sinif</td>
    </tr>";
    echo "<tr><td>".$ogrenciDetaylari['ogr1']['id']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr1']['adi']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr1']['soyadi']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr1']['bolum']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr1']['dersler']['ders1']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr1']['sınıf']."</td>";
    echo"<tr><td></td><td></td><td></td><td></td><td>".$ogrenciDetaylari['ogr1']['dersler']['ders2']."</td></tr>";
    echo"<tr><td></td><td></td><td></td><td></td><td>".$ogrenciDetaylari['ogr1']['dersler']['ders3']."</td></tr>";

    echo "<tr><td>".$ogrenciDetaylari['ogr2']['id']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr2']['adi']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr2']['soyadi']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr2']['bolum']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr2']['dersler']['ders1']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr2']['sınıf']."</td>";
    echo"<tr><td></td><td></td><td></td><td></td><td>".$ogrenciDetaylari['ogr2']['dersler']['ders2']."</td></tr>";
    echo"<tr><td></td><td></td><td></td><td></td><td>".$ogrenciDetaylari['ogr2']['dersler']['ders3']."</td></tr>";
    
    echo "<tr><td>".$ogrenciDetaylari['ogr3']['id']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr3']['adi']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr3']['soyadi']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr3']['bolum']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr3']['dersler']['ders1']."</td>";
    echo"<td>".$ogrenciDetaylari['ogr3']['sınıf']."</td>";
    echo"<tr><td></td><td></td><td></td><td></td><td>".$ogrenciDetaylari['ogr3']['dersler']['ders2']."</td></tr>";
    echo"<tr><td></td><td></td><td></td><td></td><td>".$ogrenciDetaylari['ogr3']['dersler']['ders3']."</td></tr>";
    
    
    echo"</tr>";
    echo "</table>";
    
    ?>

    <h3>Koşul İfadeleri (If-Else)</h3>
    <p>İf-Else Bloklarında öncelikle koşul belirtilir ve sonraki dallanma koşula göre devam eder.</p>


    <h5>Karşılaştırma Operatörleri</h5>
    <ol>
        <li> == ($a == $b) Eşit ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
        <li> === ($a === $b) Denk ise. (Genellikle String bir karşılaştırma yapılır.)</li>
        <li> != ($a != $b) Eşit değil ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
        <li> !== ($a !== $b) Denk değil ise. (Genellikle String bir karşılaştırma yapılır.)</li>
        <li> > ($a > $b) Büyük ise.</li>
        <li> >= ($a >= $b) Büyük veya eşit ise.</li>
        <li>
            < ($a < $b) Küçük ise.</li>
        <li>
            <= ($a <=$b) Küçük veya eşit ise.</li>

    </ol>

    <h5>Mantıksal Operatörler</h5>
    <ol>
        <li> ! (olumsuzsa) (!$a) --> $a'nın değeri False ise True döner. Aksini yapar olumsuz mu diye sorar. </li>
        <li> && - AND (ve) ($a && $b ) --> $a ve $b'nin değeri olumlu ise True döner, iki koşul da sağlanmak zorundadır. Koşullardan bir tanesi false dönerse genel değer False olur. </li>
        <li> || - OR (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç True olarak döner. Herhangi birisinin koşulu sağlaması genel dönüşü True yapar. </li>
    </ol>

    <h4>Not:</h4>

    <ol>
        <li>Elseif sürekli tekrar eden sorgu bloğu açar.</li>
        <li>Else son kapanış koşuludur. (Herhangi bir şart belirtilmez. Hiçbir önkoşul gerçekleşmediğinde çalışacak son koşulu ifade eder.)</li>
    </ol>



    <?php

    /*   if (condition) {
        # code...
    } elseif (condition) {
        # code...
    } elseif (condition) {
        # code...
    } elseif (condition) {
        # code...
    } else {
        # code...
    } */

    $sayi1 = 123;
    $sayi2 = 345;
    $metin = "Adü";

    /* Değer Varsa */
    if ($sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı : $sayi1";
    }

    /* Değer Yoksa */
    if (!$sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı";
    }

    /* eşitlik Varsa */
    if ($sayi1 == $sayi2) {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    } else {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    }

    /* eşitlik Yoksa Varsa */
    if ($sayi1 != $sayi2) {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    } else {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    }

    /* Denklik Varsa */
    if ("ogrenci" === "ogrenci") {
        echo "<br>Girilen değerler aynı";
    } else {
        echo "<br>Girilen değerler aynı değil.";
    }

    /* Denklik Varsa */
    if ($metin === "Adü") {
        echo "<br>Girilen değerler aynı : $metin";
    } else {
        echo "<br>Girilen değerler aynı değil.";
    }

    /* And Örneği */
    if (($sayi1 < $sayi2) and ("ogrenci" === "ogrenci")) {
        echo "<br>Koşullar Sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı.";
    }

    /* OR Örneği */
    if (($sayi1 < $sayi2) or (15 > 25)) {
        echo "<br>Koşullar Sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı.";
    }


    if ($sayi1 > $sayi2) {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür. $sayi1>$sayi2";
    } else {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }

    if ($sayi1 >= $sayi2) {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür veya eşittir. $sayi1>=$sayi2";
    } else {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }



    /* uygulama: 
    1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız. 
    2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız.
    3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız. */

    /* 1.Soru */

    echo "<hr>";
    echo "<h3>1.Soru</h3>";
    echo " 1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız.";
    $sayi1 = rand(0, 100);

    if (fmod($sayi1, 2) == 0) {
        echo "$sayi1 sayısı çift sayıdır.";
    } else {
        echo "$sayi1 sayısı tek sayıdır.";
    }
    echo "<hr>";
    echo "<h3>2.Soru</h3>";
    echo " 2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız.";
    if ($sayi1 <= 50) {
        echo "Kaldiniz";
    } else {
        echo "Geçtiniz";
    }
    echo "<hr>";
    echo "<h3>3.Soru</h3>";
    echo "3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız.";
    $sayi2 = rand(0, 25);
    echo "Girilen Yas= $sayi2 <br>";
    if ($sayi2 <= 18) {
        $kalanYil = 18 - $sayi2;
        echo $kalanYil . "yil sonra ehliyet alabilirsiiniz.";
    } else {
        echo "Ehliyet alabilirsiniz.";
    }


    ?>

 <!-- 
     sorulardan biri git ile ilgili olur 
     dersteki uygulamalarını tekrar çöz
     matematiksel işleemlere çalış
     metinsel ifadelrere çalış  büyük harfe kücük harfe cevirme vs
     kelime parçalama bölme
     dizeler 
     ıf else
     
  -->
</body>

</html>