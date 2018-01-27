

<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>4 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="./4 Col Portfolio - Start Bootstrap Template_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./4 Col Portfolio - Start Bootstrap Template_files/4-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="Jugaadshop.php">MNNIT BUY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="file:///C:/Users/Nitin/AppData/Local/Temp/Rar$EXa0.790/startbootstrap-4-col-portfolio-gh-pages/index.html#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="file:///C:/Users/Nitin/AppData/Local/Temp/Rar$EXa0.790/startbootstrap-4-col-portfolio-gh-pages/index.html#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="file:///C:/Users/Nitin/AppData/Local/Temp/Rar$EXa0.790/startbootstrap-4-col-portfolio-gh-pages/index.html#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="file:///C:/Users/Nitin/AppData/Local/Temp/Rar$EXa0.790/startbootstrap-4-col-portfolio-gh-pages/index.html#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">MNNIT GOODS
        <small></small>
      </h1>

 <form  method="post" action="sell.php">
		<?php include('serve.php');?>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name;?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email;?>">
		</div>
		<div class="input-group">
			<label>Contact no.</label>
			<input type="number" name="contact">
		</div>
		<div class="input-group">
			<label>Your Address</label>
			<input type="text" name="address">
		</div>

      
        
		<div class="input-group">
			<button type="submit" name="Sell" class="btn">Bech De!!!</button>
		</div>
		
        
	</form>

    
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright © Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="./4 Col Portfolio - Start Bootstrap Template_files/jquery.min.js.download"></script>
    <script src="./4 Col Portfolio - Start Bootstrap Template_files/bootstrap.bundle.min.js.download"></script>


</body></html>