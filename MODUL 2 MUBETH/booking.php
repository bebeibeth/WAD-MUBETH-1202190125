<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESD VENUE BOOKING</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/book.css">
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
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Booking <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- PHP Section -->
    <?php
        $method_selected = '';
        $image_selected = '';
        $book1 = isset($_POST['card1']);
        $book2 = isset($_POST['card2']);
        $book3 = isset($_POST['card3']);
        $img_src = [
            "1.png",
            "2.png",
            "3.png"
        ];

        // Booking from Book Now buttons
        if ($book1) {
            $method_selected = '
                <select class="custom-select" name="roomtype" disabled>
                <option value="Peta Park">Peta Park</option>
                <input type="hidden" name="roomtype" value="Peta Park">
                </select>';
            $image_selected = $img_src[0];
        } else if ($book2){
            $method_selected = '
                <select class="custom-select" name="roomtype" disabled>
                <option value="Bandung Convention Center">Bandung Convention Center</option>
                <input type="hidden" name="roomtype" value="Bandung Convention Center">
                </select>';
            $image_selected = $img_src[1];
        }else if ($book3){
            $method_selected = '
                <select class="custom-select" name="roomtype" disabled>
                <option value="Balai Sartika">Balai Sartika</option>
                <input type="hidden" name="roomtype" value="Balai Sartika">
                </select>';
            $image_selected = $img_src[2];
        //The other method
        }else {
            $method_selected = '
                <select class="custom-select" name="roomtype">
                <option value="Peta Park">Peta Park</option>
                <option value="Bandung Convention Center">Bandung Convention Center</option>
                <option value="Balai Sartika">Balai Sartika</option>
                </select>';
            $image_selected = $img_src[0];
        }
    ?>

    <!-- Content -->
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
        <div class="container bg-dark">
        <p class="text-light text-center">Find your best deal for your event, here! <br></p>
        </div>
            <!-- Left -->
            <div class="col-md-auto">
            <img src=<?=$image_selected?> alt="Preview Bedroom" class="image-preview">
                
            </div>

            <!-- Right -->
            <div class="col-md-6">
            <form action="mybooking.php" method="post">
                    <div class="form-group">
                        Name
                        <input type="text" class="form-control" name="name" value="Mubeth_1202190125">
                    </div>
                    <div class="form-group">
                        Event Date
                        <input type="date" class="form-control" name="eventdate">
                    </div>
                    <div class="form-group">
                        Start Time 
                        <input type="time" class="form-control" name="starttime">
                    </div>
                    <div class="form-group">
                        Duration(hours)
                        <input type="number" class="form-control" name="duration" aria-describedby="dur_info" value=0>
                    </div>
                    <div class="form-group">
                        Building Type
                        <?=$method_selected?>
                    </div>
                    <div class="form-group">
                        Phone Number
                        <input type="number" class="form-control" name="phone_num">
                        <br>
                    <div class="form-group">
                        Add Service(s)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="Catering"
                                id="service_check1">
                            Catering / $700
                            <br/>
                            <input class="form-check-input" type="checkbox" name="service[]" value="Decoration"
                                id="service_check2">
                            Decoration / $450
                            <br/>
                            <input class="form-check-input" type="checkbox" name="service[]" value="Sound System"
                                id="service_check1">
                            Sound System / $250
                            <br/>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Book"></input>
                    </div>
                </form>
            </div>

        </div>
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