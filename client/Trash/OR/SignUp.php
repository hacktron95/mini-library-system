<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Libra</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet" />
    <!-- Your custom styles (optional) -->
    <link href="SignUp.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Comfortaa"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
  </head>
  <?php
  $connect = mysqli_connect('localhost', 'user', 'pass1234', 'mini_library') or die("Unable to connect.");
  
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phoneNumber'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phonesNumber = $_POST['phoneNumber'];
    $query = 'SELECT * FROM user WHERE Email="'.$email.'" AND Password = "'.$password.'"';
      $results = mysqli_query($connect, $query) or die("Error in query");
      $rows = mysqli_num_rows($results);
      $found = 0;
      if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_object($results)) {
          if (($row->Email) == $email && ($row->Password) == $password) {
            $found = 1;
          }
        }
      }

      if ($found == 1) {
        echo '<script type="text/javascript">alert("Email already used. Please Sign in.");</script>';
      }else {
        $query = 'INSERT INTO user VALUES ("'.$name.'", "'.$email.'", "'.$password.'", "'.$phonesNumber.'")';
        $results = mysqli_query($connect, $query) or die("Error in query");
        if ($results) {
          header("Location: SignIn.php");
        }
      }
  }

  ?>
  <body>
    <canvas id="nokey" width="800" height="800">
      Your Browser Don't Support Canvas
    </canvas>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark myNav">
      <span class="navbar-brand" href="#"
        ><strong><i class="fas fa-book-open"></i> Libra</strong></span
      >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
              <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="my-container">
      <!-- Default form register -->
      <form class="text-center p-5" method="POST" action="">
        <p class="h4 mb-4">Sign up</p>

        <div class="md-form">
          <input type="text" name="name" id="name" class="form-control" />
          <label for="name">Name</label>
        </div>
        <div class="md-form">
          <input type="text" name="email" id="email" class="form-control" />
          <label for="email">Email</label>
        </div>
        <div class="md-form">
          <input type="password" name="password" id="password" class="form-control" />
          <label for="password">Password</label>
        </div>
        <div class="md-form">
          <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" />
          <label for="phoneNumber">Phone Number</label>
        </div>
        <!-- Sign up button -->
        <button class="btn blue-gradient">
          Sign Up
        </button>

        <!-- Social register -->
        <p>or sign up with:</p>

        <a class="light-blue-text mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="light-blue-text mx-2">
          <i class="fab fa-twitter"></i>
        </a>
      </form>

      <!-- Default form register -->
    </div>

    <footer class="font-small footer-color">
      <!-- Copyright -->
      <div class="text-center py-3">
        <!-- Facebook -->
        <a class="fb-ic">
          <i class="fab fa-facebook-f fa-lg white-text mr-md-3"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter fa-lg white-text mr-md-3"> </i>
        </a>

        © 2018 Copyright to &nbsp
        <a href="#">
          Libra.com
        </a>
      </div>
      <!-- Copyright -->
    </footer>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.js"></script>
    <script type="text/javascript" src="js/canvas_controller.js"></script>
  
  </body>
</html>
