<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-1</title>
</head>
<body>
    <!-- Html yorum Satiri -->
    <?php
      /* aciklama Satiri Blogu 
      (Coklu satir kullanilabilir) Olusturmanin kisa yolu Shit+Alt+A
      */
      // tek satir aciklama 

      /*  Kullanılan Komut:

            echo:Ekrana yazdirma islemi yapar.
                Komut icerisinde html etiketleri kullanilabilir.
                Cift veya tirnak ile kullanilabilir.
                Cift tirnak ile kullanildiginda icerisindeki degiskenilerin
                icerigini ekrana yazar.
                Nokta operatoru ile birlestirme islemi yapilabilir.
                Ters Slash(/) kacis karakteridir.Ozel ifadelerden once kullanilir.
      
      */
      echo "<h3> Samet Kotu</h3>";
      echo "<h4>Aydin Meslek Yuksekokulu";
      echo "Aydin Meslek Yuksekokulu</h4>";
      echo "Bilgisayar Muhendisligi"." Aymes";
      echo "<br>Bilgisayar Muhendisligi"." Aymes";
      
      echo "<hr> <h4>Degisken Tanimlama</h4>";
      echo "<ol>
      <li>Degisken isimleri $ ile baslar</li>
      <li>Degisken isimleri sayisal ifadelerle baslayamaz.</li>
      <li>Degisken isimlerinde bosluk kullanilmaz Ornek kullanim camel case dir birinicSinif</li>
       <li>Degisken isimleri kucuk-buyuk harflere duyarlidir \$sayi != \$Sayi </li> 
       <li>Degisken ismi, degiskenin tasidigi icerigi ifade etmeli</li> 
       <li>Degisken iceriginde metinsel ifade varsa Cift tirnak veya tek tirnak kullanilabilir. </li>  
       <li>Degisken iceriginde sayisal bir ifade varsa tirnak kullanmak gerekli degildir</li>
       <li>Degisken icerikleri ekrana echo komutu ile yazdirilabilir</li>
      
      </ol>";
      echo "<hr> <h4>Degisken Tanimlama Orenekleri</h4>";
      $isim ="Ahmet";
      $soyisim = "Erimez";
      $gsm = "121212121212";
      echo $isim."<br>";
      echo "$isim $soyisim $gsm";

        /* Uygulama:
        Universite-myo-ad-soyad-numara degiskenlerini tanmlayiniz
        Bu degiskenlerin icerilerin tablo veya form iceriginde ekrana yazdiriniz.
        */
        $universite="Adnan Menderes";
        $myo="Myo";
        $ad="Samet";
        $soyad="Kotu";
        $numnara="1234";
    
    ?>
    <form action="">
 <label for="universite">Uni:</label>
 <input type="text" name="" value="<?php echo $universite;?>" id="Universite" disabled>
<br>
 <label for="Myo">Myo:</label>
 <input type="text" name="" value="<?php echo $myo;?>" id="myo">
<br>
 <label for="ad">Ad:</label>
 <input type="text" name="" value="<?php echo $ad;?>" id="ad">
<br>
 <label for="soyad">Soyad:</label>
 <input type="text" name="" value="<?php echo $soyad;?>"id="soyad">
<br>
 <label for="numnara">Numara:</label>
 <input type="text" name="" value="<?php echo $numnara;?>"id="numara">
</form >


</html>