<!DOCTYPE html>
<html lang="en">
<head>
  <title>PERFECT SELECT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>
  
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Me</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">LOG OUT</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="container-fluid bg-3 text-center"> 
  <h1 class="margin">WELCOME</h1><br>   
  <div class="row">
    <div class="col-sm-4">
      <h3>NOTES</h3>
      <a href="panel.php">
  <img src="notes.jpg"  style="width:300px;height:300px;border:0;">
</a>
    </div>
    <div class="col-sm-4"> 
      <h3>ASSIGNMENTS </h3>
      <a href="panel.php">
  <img src="as.jpg" style="width:300px;height:300px;border:0;">
    </div>
  </div>
</div>
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-4">
      <h3>PREVIOUS EXAMINATION PAPERS</h3>
      <a href="panel.php">
  <img src="ep.jpg"  style="width:300px;height:300px;border:0;">
</a>
    </div>
     <div class="col-sm-4">
         <h3>QUERIES</h3>
      <a href="q.php">
  <img src="q.jpg"  style="width:300px;height:300px;border:0;">
  </div>
</div>

<footer class="container-fluid bg-4 text-center">
  <p>Website made by <a href="about.php">ABOUT</a></p> 
</footer>

</body>
</html>
