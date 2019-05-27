<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Libra</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/mdb.min.css" rel="stylesheet" />
    <link href="index.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
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
    }
?>
<body>
    <canvas id="nokey" width="800" height="800">
        Your Browser Don't Support Canvas
    </canvas>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark myNav">
        <span class="navbar-brand" href="#"><strong><i class="fas fa-book-open"></i> Libra</strong></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="app.php">App</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info"
                        aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="#"><?php echo $account?></a>
                        <a class="dropdown-item" href="<?php echo $logout?>"><?php echo $loginecho?></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="my-container">
        <div class="row">
            <div class="col-md-6">
                <div class="wrappers">
                    <p align="justify">
                        Libra, Is a web app that make managing your personal library much
                        easier.
                        <img class="books-lover" src="assets/book_lover.svg" alt="book lover" />
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wrappers button-wrapper">
                    <div class="list-group">
                        <p class="list-group-item">
                            Manage Your Books Info.
                        </p>
                        <p class="list-group-item">
                            Manage your Book loan.
                        </p>
                        <p class="list-group-item">
                            Browse and Search your books.
                        </p>
                        <p class="list-group-item">
                            Write your own reviews on every book.
                        </p>
                    </div>
                    <a href="SignUp.php">
                        <button class="btn blue-gradient">
                            Join Our Web App
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer class="font-small footer-color">
        <div class="text-center py-3">
            <a class="fb-ic">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-3"> </i>
            </a>
            <a class="tw-ic">
                <i class="fab fa-twitter fa-lg white-text mr-md-3"> </i>
            </a>

            <span> © 2018 Copyright to &nbsp</span>
            <a href="#">
                Libra.com
            </a>
        </div>
    </footer>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.js"></script>
    <script type="text/javascript" src="js/canvas_controller.js"></script>
</body>


</html>