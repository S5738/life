
<!DOCTYPE html>
<html lang="en">
<head>
     <title>project</title>
        
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--js links-->
        <script src="js/jquery.slim.min.js" type="text/javascript"> </script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <!--bootstrap link-->
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <!--css link-->
        <link rel="stylesheet" type="text/css" href="css/style2.css"/>
        <!--Slider liks-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
      <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <!--fontgoggle link-->
        <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" media>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" media>
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <link rel="stylesheet" href="css/animations.css" media="">
        <!--fontawsome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--slider script-->
        <script>$(document).ready(function(){
    $('.slider').bxSlider({ auto:true, mode:'fade', controls:false, pager:true, touchEnabled:false, speed: 1000 });});</script>
  </head>
<body>
  <header class="header">
    
      <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php"><img src="img/cosmeticlogo1.png" id="imglogo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About</a>
          </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
          
           <li class="nav-item">
            <a class="nav-link" href="gallary.php">Gallary</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
          <li>
            <a href="hms/user-login.php"><button name='login' id='login'>SignIn/Login</button></a>
        </li>
        <li>
          
      <a href="cart.php" ><i class="fa fa-shopping-cart" style="font-size: 30px;"    aria-hidden="true" ></i><span class='badge badge-warning' id='cart-item'> </span></a>
      </li>

        </ul>
        
      </div>
    </nav>

        </div>
  </header>
</body>