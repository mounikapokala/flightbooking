<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
?>

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
      <li class="nav-item active">
        <a class="nav-link">Welcome <?php echo $_SESSION['username']?></a>
      </li>
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
      <img src="https://images.wallpaperscraft.com/image/wing_plane_clouds_140963_3840x2160.jpg" class="d-block w-100" alt="flight">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.wallpapersafari.com/60/10/RqGx9U.jpg" class="d-block w-100" alt="flight1">
    </div>
    <div class="carousel-item">
      <img src="https://images.wallpaperscraft.com/image/airplane_sky_clouds_flight_117649_3840x2160.jpg" class="d-block w-100" alt="flight2">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
   <form class= "mouni">    
       
        
  <div class="form-group col-md-4">
      <label for="from">FROM</label>
      <select id="from" class="form-control">
        <option selected>select</option>
        <option>mumbai</option>
          <option>chennai</option>
          <option>banglore</option>
          <option>kerala</option>
           <option>pune</option>
           <option>delhi</option>
          <option>punjab</option>
          
        
      </select>
    </div>
              
  <div class="form-group col-md-4">
      <label for="to">TO</label>
      <select id="to" class="form-control">
        <option selected>select</option>
        <option>mumbai</option>
          <option>chennai</option>
          <option>banglore</option>
          <option>kerala</option>
           <option>pune</option>
           <option>delhi</option>
          <option>punjab</option>
          
        
      </select>
    </div>
       <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">One way</label>
  </div>
       <div>
       <label for="start">Start date:</label>

<input type="date" id="start" name="trip-start">
       </div>
       <div>
       <label for="return">Return date:</label>

<input type="date" id="return" name="trip-start">
       </div>
  
  
<button type="submit" class="btn btn-primary">Book</button>
       
</form> 
  </div>   
    
     

                     
                      

  <script src="js/jquery-3.3.1.min.js"></script>
    
<!--  Always Download latest version of Boostrap and add here-->
<script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"> </script>
</body>

</html>