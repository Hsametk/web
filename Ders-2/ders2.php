<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.Hafta</title>
</head>

<body>
    <?php
    /* Php versiyon ve detay bilgisini gosterir*/
    // echo phpinfo();

    echo "<h4> Tirnak Isaretleri Arasindaki Farklar </h4>";
    $uni = "Adnan Menderes Universitesi";
    echo "Degisken icerigi: $uni";
    echo "<br>";
    /* Degisken Isminin yazdirilmasi */
    echo "1-Kazandigimiz Universite: \$uni";
    echo "<br>";
    echo "2-Kazandigimiz Universite:" . '$uni';
    echo "<br>";
    echo '3-Kazandigimiz Universite: $uni';
    /* Degisken Iceriginin Yazdirilmasi */
    echo "<br>";
    echo "1-Kazandigimiz Universite: $uni";
    echo "<br>";
    echo "2-Kazandigimiz Universite:" . $uni;
    echo "<br>";
    echo "3-Kazandigimiz Universite:" . "$uni";
    echo "<br>";
    echo '4-Kazandigimiz Universite:' . "$uni";

    echo "<hr><h4> Temel Matematiksel Islemler </h4>";
    echo "<h5>Toplama Islemi</h5>";
    $sayi1 = 10;
    $sayi2 = 20;

    echo "\$sayi1 + \$sayi2=" . ($sayi1 + $sayi2);
    echo "<br>";
    echo "$sayi1 + $sayi2=" . ($sayi1 + $sayi2);
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2= $sonuc";

    echo "<h5>Cikarma Islemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo "\$sayi1 - \$sayi2=" . ($sayi1 - $sayi2);
    echo "<br>";
    echo "$sayi1 - $sayi2=" . ($sayi1 - $sayi2);
    echo "<br>";
    $sonuc = $sayi1 - $sayi2;
    echo "$sayi1 - $sayi2 = $sonuc";




    echo "<h5>Carpma Islemi</h5>";
    $sayi1 = 10;
    $sayi2 = 20;
    echo "\$sayi1 * \$sayi2=" . ($sayi1 * $sayi2);
    echo "<br>";
    echo "$sayi1 * $sayi2=" . ($sayi1 * $sayi2);
    echo "<br>";
    $sonuc = $sayi1 * $sayi2;
    echo "$sayi1 * $sayi2 = $sonuc";

    echo "<h5>Bolme Islemi</h5>";
    $sayi1 = 10;
    $sayi2 = 20;
    echo "\$sayi1 / \$sayi2=" . ($sayi1 / $sayi2);
    echo "<br>";
    echo "$sayi1 / $sayi2=" . ($sayi1 / $sayi2);
    echo "<br>";
    $sonuc = $sayi1 * $sayi2;
    echo "$sayi1 / $sayi2 = $sonuc";

    echo "<h5>Ust Alma Islemi (pow(x,y)</h5>";
    $x = 4;
    $y = "2";
    //$y =(int) "2"; Donusum Islemi
    echo "Degisken Tipi:" . gettype($x) . "<br>";
    echo "Degisken Tipi:" . gettype($y) . "<br>";
    echo "$x<sup>$y</sup>=" . pow($x, $y);

    echo "<h5>Karekok Alma Islemi (sqrt(x)</h5>";
    $x = 123;
    $karekok = sqrt($x);
    echo "$x sayisinin karekoku :$karekok";
    echo "<h5>Mutlak Deger Alma Islemi (abs(x)</h5>";
    $x = (-12);
    $mutlak = abs($x);
    echo "|$x| sayisinin mutlak cegeri: $mutlak";

    echo "<h5>Taban Degisim Islemi (base_convert(x,taban1,taban2)</h5>";
    echo "27 sayisinin 2lik tabanda karsiligi:" . base_convert(27, 10, 2);
    echo "<br>";
    $sayi = 50;
    $taban = 10;
    $yenitaban = 2;
    $sonuc = base_convert($sayi, $taban, $yenitaban);
    echo "($sayi) <sub>$taban</sub>=($sonuc)<sub>$yenitaban</sub>";

    echo "<h5>Mod Islemi (fmod(x,y)</h5>";
    $x = 20;
    $y = 4;
    $mod = fmod($xw, $y);
    echo "$x mod $y : $mod";
    echo "<br> $x sayisi:" . (fmod($x, 2) == 0 ? "Cifttir" : "Tektir");

    echo "<h5>Yuvarlama Islemi (round(x,y)</h5>";
    $x = 15.315;
    $y = 15.385;
    echo "$x Bir ondalik basamak yuvarlamasi sonucu:" . round($x, 1) . "<br>";
    echo "$y Bir ondalik basamak yuvarlamasi sonucu:" . round($y, 1) . "<br>";
    echo "$x Bir ondalik basamak yuvarlamasi sonucu:" . round($x, 2) . "<br>";

    echo "<h5>Yuvarlama Islemi (floor(x)</h5>";
    /* En yakin en kucuk tam sayiya yuvarlar */

    $x = 15.913;
    echo "$x floor yuvarlamasi sonucu" . round($x, 1) . "<br>";

    echo "<h5>Yuvarlama Islemi (ceil(x)</h5>";
    /* Kendisinden buyuk, en kucuk tam sayiya yuvarlar */
    $x = 15.913;
    echo "$x ceil yuvarlamasi sonucu" . ceil($x) . "<br>";

    echo "<h5>Rastgele sayi uretme Islemi (rand(x)</h5>";
    echo "10-100 Arasinda Rastgele Sayi Uretildi:" . rand(10, 100) . "<br>";

    for ($i = 1; $i < 10; $i++) {
        echo "$i. Sayi:" . rand(0, 100) . "<br>";
    }

    /* Ödev */
    for ($i = 0; $i <= 10; $i++)
        $dizi[$i] = rand(1, 100);

    for ($i = 0; $i < count($dizi); $i++)
        echo $dizi[$i] . " ";






    ?>
</body>

</html>