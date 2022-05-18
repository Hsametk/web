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
<div class="row justify-content-center">
<form action="" method="POST" name="contactForm" class="contactForm">
<div class="row">
											<div class="col-md-7 my-5">
												<div class="form-group">
													<input type="text" class="form-control" name="nameSurname" placeholder="İsim Soyisim">
												</div>
											</div>
											<div class="col-md-7 mb-5">
												<div class="form-group">
													<input type="email" class="form-control" name="email" placeholder="Email Adresiniz">
												</div>
											</div>
											<div class="col-md-7 mb-5">
												<div class="form-group">
													<input type="text" class="form-control" name="gsm" placeholder="Gsm Adresiniz">
												</div>
											</div>

											<div class="col-md-7 mb-5"">
												<div class="form-group">
													<input type="radio" name="gender" value="0">Kadın<br>
													<input type="radio" name="gender" value="1">Erkek<br>
												</div>
											</div>

											<div class="col-md-7 mb-5"">
												<div class="form-group">
													<select name="courses" class="form-control">
														<option> Ders Seçiniz</option>
														<option value="Php"> Php</option>
														<option value="Java"> Java</option>
														<option value="CSS"> CSS</option>

													</select>
												</div>
											</div>

											<div class="col-md-6 mb-5">
												<div class="form-group">
													<textarea name="description" class="form-control" rows="5" cols="70"></textarea>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Formu Kaydet" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
</form>
</div>

<?php
try {
		$db = new PDO("mysql:host=localhost;dbname=uygulamaform;charset=UTF8", "root", "");
		echo "Bağlantı Başarılı...";
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

	$nameSurname = $_POST["nameSurname"];
	$email 		= $_POST["email"];
	$gsm 		= $_POST["gsm"];
	$gender 	= $_POST["gender"];
	$courses 	= $_POST["courses"];
	$description = $_POST["description"];

	$save = $db->prepare("INSERT INTO forms SET
	nameSurname =:nameSurname,
	email 		=:email,
	gsm			=:gsm,
	gender		=:gender,
	courses		=:courses,
	description	=:description
	");

	$insert = $save->execute(array(
		"nameSurname" 	=> $nameSurname,
		"email"			=> $email,
		"gsm"			=> $gsm,
		"gender"		=> $gender,
		"courses"		=> $courses,
		"description"	=> $description
	));

	if ($insert) {
		echo "Form Kaydedildi.";
	} else {
		echo "Hata Var";
	}
  ?>
</body>
</html>