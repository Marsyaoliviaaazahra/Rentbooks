<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <!--navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="{{ asset('images/book.png') }}" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
      Rent Books
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Fiction</a></li>
            <li><a class="dropdown-item" href="#">Non-fiction</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Novel</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->

<!--carousel-->
<div id="carouselExampleInterval" class="carousel slide" style="max-height: 400px; max-width: 100%" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="https://i.pinimg.com/564x/82/1c/2f/821c2ffb0a2bba6fbb50c73ea189c15f.jpg" class="d-block w-100" alt="..." style="max-height: 410px;">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="https://i.pinimg.com/736x/47/ce/60/47ce60202376926b455fa0c524289fcb.jpg" class="d-block w-100" alt="..." style="max-height: 410px;" >
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="https://i.pinimg.com/564x/07/47/77/07477742cce8eed8dd59044e86f1be52.jpg" class="d-block w-100" alt="..." style="max-height: 410px;">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--end carousel-->

<!-- jumbotron -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
                <h2>Rent Books</h2>
                <a href="/register" class="btn btn-outline-success">Register now!</a>
            </div>
            
        </div>
    </div>
<!-- end jumbotron -->

<!-- popular books card -->
<section>
    <div class="container mt-5">
        <div class="row text-center">
            <h2>Popular books</h2>
            <hr class="solid">
        </div>
        <div class="row my-4 ms-5">
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                <img src="https://inc.mizanstore.com/aassets/img/com_cart/produk/PULANG.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Pulang</h5>
                        <p class="card-text">Tere Liye</p>
                        <a href="https://inc.mizanstore.com/aassets/img/com_cart/produk/PULANG.jpg" class="btn btn-outline-primary w-100
                        ">Read now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="https://www.gramedia.com/blog/content/images/2021/07/9786024246945_Laut-Bercerita.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Laut Bercerita</h5>
                        <p class="card-text">Leila S. Chudori</p>
                        <a href="https://www.gramedia.com/best-seller/resensi-novel-laut-bercerita-karya-leila-s-chudori/" class="btn btn-outline-primary w-100">Read now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="https://www.gramedia.com/blog/content/images/2021/07/Si_Putih_cov-min.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Si Putih</h5>
                        <p class="card-text">Tere Liye</p>
                        <a href="https://www.gramedia.com/best-seller/review-novel-si-putih-karya-tere-liye/" class="btn btn-outline-primary w-100">Read now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end popular books card -->

<!-- contact -->
    <div class="container mt-4">
        <div class="row text-center">
            <h2>Contact</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{route('store')}}" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control"name="name" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea type="message" name="message" id="message" class="form-control"></textarea>
                    </div>                   
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<!-- end contact -->

<!-- footer -->
<footer class="mt-5 bg-secondary bg-opacity-25 text-center" style="height:40px;">
    <p>
        Created by <a href="https://www.instagram.com/mrsyaolvia/" style="text-decoration:none; color:rgb(68, 71, 91);" target="_blank">Marsya Olivia Azzhra</a>
    </p>
</footer>
<!-- end footer -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</body>
</html>