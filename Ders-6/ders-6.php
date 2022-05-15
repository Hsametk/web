<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form>
<div class=" col-3 m-5">
    <label for="isimSoyisim" class="form-label">Isim Soyisim</label>
    <input type="isim" class="form-control" id="isim" aria-describedby="isim">
  </div>
  <div class="col-3 m-5">
    <label for="Ema'l" class="form-label">Email adres</label>
    <input type="email" class="form-control" id="Email" aria-describedby="email">
  </div>
  <div class="col-3 m-5">
    <label for="numara" class="form-label">Telefon Numarasi</label>
    <input type="numara" class="form-control" id="numara">
  </div>
  <div class="col-3 m-5 ">
    <label for="Cinsiyet" class="form-label">Cinsiyet Giriniz</label>
    <input type="cinsiyet" class="form-control" id="cinsiyet">
  </div>
  <div class="col-3 m-5 ">
  <select class="form-select" aria-label="secme">
  <option selected>Dersler</option>
  <option value="1">Yazilim Mimarileri</option>
  <option value="2">Web Programlama</option>
  <option value="3">Sunucu İşletim Sistemleri</option>
</select>
  </div>
<div class="col-3 m-5 ">
    <label for="Not" class="form-label">Notunuzu Giriniz</label>
    <input type="not" class="form-control" id="not">
  </div>
  <button type="submit" class="btn btn-primary m-5">Gönder</button>
</form>
</body>
</html>