<head>
    <meta charset="utf-8">
    <title> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <!-- Bootstrap 4 CDN Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- font awesome css  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- my custom css file   -->
    <link rel="stylesheet" href="lib/views/css/styles.css">

  </head>
  <body>

  <!-- Navigation -->

<nav class="navbar navbar-expand-sm navbar-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation" style="color:white;">menu</button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        
          <!-- // nav with breadcrumb logic-->
<?php 

$query = $_SERVER['QUERY_STRING'];

// home breadcrumb
if(!isset($_GET[$query])){

    echo '     
    <li class="nav-item active ">
    <a class="nav-link" href="/project/index.php">Home</a>
    </li>

    <li class="nav-item ">
    <a class="nav-link" href="index.php?list">Products</a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="index.php?admin">Admin</a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="#">About</a>
    </li>
     ';  
}
          
// list or products
else if(isset($_GET['list'])){ 
  echo '
  
  <li class="nav-item ">
  <a class="nav-link" href="/project/index.php">Home</a>
  </li>

  <li class="nav-item active">
  <a class="nav-link" href="index.php?list">Products</a>
  </li>

  <li class="nav-item">
  <a class="nav-link" href="index.php?admin">Admin</a>
  </li>

  <li class="nav-item">
  <a class="nav-link" href="#">About</a>
  </li>
      
';
} 

// need to rename this page and stuff
else if(isset($_GET['admin'])){ 

  echo '
  
  <li class="nav-item ">
  <a class="nav-link" href="/project/index.php">Home</a>
  </li>

  <li class="nav-item">
  <a class="nav-link" href="index.php?list">Products</a>
  </li>

  <li class="nav-item active">
  <a class="nav-link" href="index.php?admin">Admin</a>
  </li>

  <li class="nav-item">
  <a class="nav-link" href="#">About</a>
  </li>
  
  ';
}
?>
</ul>

<!-- Login button for admin and shopping cart  Need to fix for mobile view can use PHP for this-->
  <div class="w-100 text-right">
    <span class = "nav-link" ><a href="index.php?admin" style="color:#333333;">Login</a><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
  </div>
</div>

</nav>

<script>
  $('#navId a').click(e => {
    e.preventDefault();
    $(this).tab('show');
  });
</script>
  
<?php if(!isset($_GET[$query])){ 

  echo '
  <!-- Header/Hero  -->
    <div class="jumbotron jumbotron-fluid" id = "hero-image">
      <div class="container">
        <h1 class="display-3">Darwin Art Company</h1>
      <br>
      <hr style="width:25%;">
        <div class="card-columns">
      <div class="card">
        <img class="card-img-top" src=".\lib\views\Images\header-1.jpg" alt="">

      </div>
      <div class="card">
        <img class="card-img-top" src=".\lib\views\Images\\header-2.jpg" alt="">

      </div>
      <div class="card">
        <img class="card-img-top" src=".\lib\views\Images\header-3.jpg" alt="">

      </div>
    </div>

        <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Shop Now</a>
        </p>
      </div>
    </div>
';} else {
      echo ' <!-- Header/Hero  -->
      <div class="jumbotron jumbotron-fluid" id = "hero-image">
        <div class="container">
          <h1 class="display-3">Darwin Art Company</h1>
      </div>
    </div>
';
}
    ?>