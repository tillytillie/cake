<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initialscale=1">
    <lang=e n></lang>
        <title>Leema Cakes gallery</title>
        <link rel=stylesheet href="e-comm.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="e-comm.js"></script>
</head>

<body>
    <!-----------------------Toggle to small screen-->
    <div class="top-nav-bar">
        <div class="search-box">
            <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>

          <a href="e-comm.php" > <img class="my-logo" src="./images/mylogo.jpg"> </a>
            <input type="text"class="form-control">
            <span class="input-group-text"><i class="fa fa-search"></i></span>

        </div>
        <!--------------------------Menu Bar--------------->

        <div class="menu-bar navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#training">Tutorial</a></li>
            </ul>
        </div>

    </div>
    </nav>


    <!--------------------------side Bar--------------->
    <section class="header">
        <div class="side-menu" id="side-menu">
            <ul>
               <a href="birthday.php"> <li>Birthday Cake</li> </a>
                <li>Wedding Cake</i>
                    <li>Cup Cake</i>
                        <li>Anniversary Cake</li>
                        <li>Birthday Cake</li>
                        <li>General Cake</i>
                            <li>Convocation cake</i>
                                <li>Burial cake</i>
                                    <li>Chocolate cake</i>
                                        <li>Special Design Cake</li>

            </ul>
        </div>
        </div>

         <!-----------------------image slide------------------>
         <div class="slider">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/wedding/w-13.jpg" alt="cakes" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/wedding/w-12.jpg" alt="cakes-1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/birthday/b-3.jpg" alt="cakes-2" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/anniversary/a-4.jpg" alt="cakes-3" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/home.jpg" class="d-block w-100">
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="slider" data-slide-to="0" class="active"></li>
                    <li data-target="slider" data-slide-to="1"></li>
                    <li data-target="slider" data-slide-to="2"></li>
                    <li data-target="slider" data-slide-to="3"></li>
                    <li data-target="slider" data-slide-to="4"></li>
                </ol>
            </div>

        </div>
    </section>
    <!----------featured categories-->
    <section class="featured-categories">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img id="features-1" src="./images/anniversary/a-8.jpg">
                </div>
                <div class="col-md-3">
                    <img id="features-1" src="./images/birthday/b-3.jpg">
                </div>
                <div class="col-md-3">
                    <img id="features-1" src="./images/wedding/w-3.jpg">
                </div>
                <div class="col-md-3">
                    <img id="features-1" src="./images/wedding/w-13.jpg">
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br>