
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"><link rel="stylesheet" href="../styles/styleHome.css" type="text/css">
    <link rel="stylesheet" href="stylesTest.css"
    <title>Community Kitchen</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
</head>
<body>
<!---navigation bar-->
<nav class="navbar navbar-expand-md navbar-light navbar-custom fixed-top shadow-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ @BASE }}"><img src="images/kitchen.png" alt="picture of kitchen logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ @BASE }}">
    Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="menu">
    Menu
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">
    Catering
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">
    Visit Us
</a>
                </li>
                <li  class="nav-item pt-2 pr-2">Cart</li>
                <div class="cart bg-light">

                    <i class="fa fa-shopping-cart"></i>
                    <div class="cartAmount">0</div>
                </div>
            </ul>
        </div>
    </div><!--container-fluid div ends-->
</nav>


<!--menu items-->
<div class="container">
    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 md-0">
            <form action="index.php" method="post" id="myForm" class="form-horizontal">
                <div class="card shadow">
                    <div>
                    <img src="../images/asian2.png" alt="asian rice" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Product1</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <p class="card-text">Lorem Ipsum dolor sit amet, consectetur adipis</p>
                    <h5>
                        <small><s class="text-secondary">$23.99</s></small>
                        <span class="price">$21.99</span>
                    </h5>
                    <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                </div>

        </div>
            </form>

        </div>

        <div class="col-md-3 col-sm-6 my-3 md-0">
            <form action="index.php" method="post" id="myForm" class="form-horizontal">
                <div class="card shadow">
                    <div>
                        <img src="../images/asian2.png" alt="asian rice" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product1</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">Lorem Ipsum dolor sit amet, consectetur adipis</p>
                        <h5>
                            <small><s class="text-secondary">$23.99</s></small>
                            <span class="price">$21.99</span>
                        </h5>
                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                    </div>

                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 my-3 md-0">
            <form action="index.php" method="post" id="myForm" class="form-horizontal">
                <div class="card shadow">
                    <div>
                        <img src="../images/asian2.png" alt="asian rice" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product1</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">Lorem Ipsum dolor sit amet, consectetur adipis</p>
                        <h5>
                            <small><s class="text-secondary">$23.99</s></small>
                            <span class="price">$21.99</span>
                        </h5>
                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                    </div>

                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 my-3 md-0">
            <form action="index.php" method="post" id="myForm" class="form-horizontal">
                <div class="card shadow">
                    <div>
                        <img src="../images/asian2.png" alt="asian rice" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product1</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">Lorem Ipsum dolor sit amet, consectetur adipis</p>
                        <h5>
                            <small><s class="text-secondary">$23.99</s></small>
                            <span class="price">$21.99</span>
                        </h5>
                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="main.js">

</script>
</body>
</html>