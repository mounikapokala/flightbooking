<!DOCTYPE html>
<html lang="en">

<head>
    <title>flight booking</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <!--  Make sure your always using the latest version of Bootstrap here-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
    
</head>
<body>
    
    
    <!--navbar-->
    

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2e2eb8;">
  <a class="navbar-brand" href="#">SAMP Airlines</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          our services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">about us</a>
          <a class="dropdown-item" href="#">In-flight services</a>
         
          <a class="dropdown-item" href="#">help</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    
    
    
    <!--carousel-->
    <div class="parent_container">
   
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://wallpaperaccess.com/full/629055.jpg" class="d-block w-100" alt="flight">
    </div>
    
  </div>
 
</div>
        
   <form class= "mouni" method="post" id="formlogin">
       <div id="loginmessage"> </div>
  <div class="form-group">
    <label for="loginemail">Email address</label>
    <input type="email" class="form-control" name="loginemail" id="loginemail" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="loginpassword">Password</label>
    <input type="password" class="form-control" name="loginpassword" id="loginpassword">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
       
</form> 
  </div>   
    
     

                     
                      

  <script src="js/jquery-3.3.1.min.js"></script>
    
<!--  Always Download latest version of Boostrap and add here-->
<script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"> </script>
    
</body>

</html>