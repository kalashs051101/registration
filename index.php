<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title> Website</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>    
    <?php  include 'menu.php' ?>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/taj.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Taj Mahal</h3>
                    <p>We had such a great time in Taj</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/m1.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Prem Mandir</h3>
                    <p>Thank you, Mathura</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/hoteltaj.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Mumbai</h3>
                    <p>We love the Hotel Taj</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="img/img-6.jpg" alt="" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Kalash Sharma</h2>
                    <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sunt reiciendis ratione aliquam unde illo facilis iure optio, debitis libero ab et in officiis saepe beatae tempore. Quas sapiente minima error, quasi dolores aperiam voluptatem distinctio earum, sunt quaerat possimus?</p>
                    <a href="about.php" class="btn btn-success">Check More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/img-4.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/img-5.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Rivers</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/img-3.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Environment</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> Registration form</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="email" name="email" autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="number" name="mobile" autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Comments</label>
                    <textarea class="form-control" name="comments" ></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@kalash-203057</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>