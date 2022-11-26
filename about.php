<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- <h1>Welcome to my channel</h1> -->
 <?php include 'menu.php'; ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Bootstrap Tutorial</h1>
            <p>Bootstrap is the most popular HTML, CSS...</p>
        </div>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="img/img-2.jpg" alt="" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">i am KALASH sharma</h2>
                    <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sunt reiciendis ratione aliquam unde illo facilis iure optio, debitis libero ab et in officiis saepe beatae tempore. Quas sapiente minima error, quasi dolores aperiam voluptatem distinctio earum, sunt quaerat possimus?</p>
                    <a href="about.php" class="btn btn-success">check more</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>