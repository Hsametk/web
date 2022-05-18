w<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Samet KOTU</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">Let's talk about everything!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas debitis, fugit natus?</p>

              <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              <!-- post dagha güvenilir bir metoddur ama get te kullanılabilir -->
              
              <form action="" method="GET" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="number" min="0" max="100" class="form-control" name="vize" placeholder="Vize Notu">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="number" min="0" max="100" class="form-control" name="final" placeholder="Final Notu">
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Hesapla" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
                  <?php

									$vize 	= @$_GET["vize"];
									$final 	=@$_GET["final"];

									$not = ($vize * 0.3) + ($final * 0.7);

									if (@$not) { ?>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" value="<?php echo $not; ?>" class="form-control" name="final" placeholder="Final Notu">
											</div>
										</div>



									<?php } ?>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>