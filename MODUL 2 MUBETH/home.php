<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESD VENUE BOOKING</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/home.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- PHP section -->
    <?php
        $img_src = [
            "1.png",
            "2.png",
            "3.png"
        ];
    ?>

    <!-- Isi Content -->
    <div class="container-fluid">
        <h2><b>WELCOME TO ESD VENUE RESERVATION</b></h2><br>
        <div class="container bg-dark">
        <p class="text-light">Find your best deal for your event, here!</p>
        </div>
        
        <form action="booking.php" method="post">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-auto">
                    <div class="card">
                        <img src=<?=$img_src[0]?> class="card-img-top" alt=" " height=" ">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Peta Park</b></h5>
            <p class="text-left">Outdoor/Indoor</p>
            <p class="card-text text-primary text-left"><b>$800/hours</b></p>
            <p class="text-left">3000 Capacity</p>
                            <div class="card-header">
              <b>FACILITIES</b>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-success">Free Parking Space</li>
              <li class="list-group-item text-success">Full AC</li>
              <li class="list-group-item text-success">Cleaning Services</li>
              <li class="list-group-item text-success">Covid-19 Protocols</li>
            </ul>

                        </div>
                        <div class="card-footer">
                            <button name="" class="btn btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-auto">
                    <div class="card">
                        <img src=<?=$img_src[1]?> class="card-img-top" alt=" " height=" ">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Bandung Convention Center</b></h5>
            <p class="text-left">Indoor</p>
            <p class="card-text text-primary text-left"><b>$900/hours</b></p>
            <p class="text-left">7500 Capacity</p>
                            <div class="card-header ">
              <b>FACILITIES</b>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-danger">Free Parking Space</li>
              <li class="list-group-item text-success">Full AC</li>
              <li class="list-group-item text-success">Cleaning Services</li>
              <li class="list-group-item text-success">Covid-19 Protocols</li>
            </ul>

                        </div>
                        <div class="card-footer">
                            <button name="card2" class="btn btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-auto">
                    <div class="card">
                        <img src=<?=$img_src[2]?> class="card-img-top" alt=" " height=" ">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Balai Sartika</b></h5>
            <p class="text-left">Indoor</p>
            <p class="card-text text-primary text-left"><b>$300/hours</b></p>
            <p class="text-left">4000 Capacity</p>
                            <div class="card-header">
                            <b>FACILITIES</b>
            </div>
            <ul class="list-group list-group-flush">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-danger">Free Parking Space</li>
                <li class="list-group-item text-danger">Full AC</li>
                <li class="list-group-item text-success">Cleaning Services</li>
                <li class="list-group-item text-success">Covid-19 Protocols</li>
            </ul>

                        </div>
                        <div class="card-footer">
                            <button name="card3" class="btn btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

        <!--Footer-->
    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white">Mubeth Praditya | 1202190125 | SI 43 09</a>
    </div>
    <!-- Copyright -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>