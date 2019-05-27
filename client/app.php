<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Libra</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet" />
    <!-- Your custom styles (optional) -->
    <link href="app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
</head>
<?php 
    $account = "My Account";
    $loginecho = "Log In";
    $logout = "SignIn.php";
    session_start();
    if(isset($_SESSION['user_name']) && isset($_SESSION['email'])){
        $account = $_SESSION['user_name'];
        $loginecho = "Log Out";
        $logout = "logout.php";
        $email = $_SESSION['email'];
        // echo "<br><br>".$email;
        // echo '<script type="text/javascript">console.log('.$email.')</script>';
    }
?>
<body>
    <canvas id="nokey" width="800" height="800">
      Your Browser Don't Support Canvas
    </canvas>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark myNav">
        <span class="navbar-brand" href="#"><strong><i class="fas fa-book-open"></i> Libra</strong></span
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
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item" href="#"><?php echo $account?></a>
                        <a class="dropdown-item" href="<?php echo $logout?>"><?php echo $loginecho?></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="my-container">
        <form>
            <div class="row">
                <div class="col-10">
                    <div class="md-form">
                        <input type="text" id="book_title" class="form-control" />
                        <label for="book_title">Search Book by Title</label>
                    </div>
                </div>
                <!-- <div class="col">

          </div> -->
                <div class="col-2">
                    <div class="md-form">
                        <button type="button" class="btn btn-primary">Add Book</button>
                    </div>
                </div>
            </div>
        </form>

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
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <script type="text/javascript" src="js/canvas_controller.js"></script>
</body>

</html>