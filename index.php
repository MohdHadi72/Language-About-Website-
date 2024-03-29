<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>PHP Website Commen </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Charm:wght@400;700&family=Cinzel+Decorative:wght@400;700;900&family=Homemade+Apple&family=Italianno&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Kaushan+Script&family=Merienda:wght@300..900&family=Oranienbaum&family=Rubik+Doodle+Shadow&family=Satisfy&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0 bg-dark text-white">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <h1>Computer languages</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0" style="margin-left:60%">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userData.php">UserInfo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="content.php">Content</a>
                    </li>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <butt class="btn btn-outline-success" type="submit">Search</butt>
                    </form>
            </div>
        </div>
    </nav>
    <section>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/HTML1.jpg" class=" w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/CSS1.jpg" class=" w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/js.jpeg" class=" w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="textcontainer my-5">
        <div class="py-5">
            <h1 class="text-center ">About Us For Language</h1>
        </div>

        <div class="row">
            <div class=" col-lg-6 col-md-6 col-12">
                <img src="images/Secure-Coding.gif" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h3 class="display-5">I'M Developer Give The Sorce Code</h3>
                <p class="py-2">Summary, <a href="">HTML</a> provides the structure, <a href="">CSS</a> takes care of the presentation,
                    and <a href="">JavaScript</a> adds interactivity to create a complete and dynamic web experience.
                    Together, they form the <a href="">foundation </a>of modern web development.A programming paradigm that treats <a href="">computation</a> as the evaluation of mathematical functions and avoids changing state and mutable data.
                    Choosing the right <a href="">programming</a> language depends on factors like the project requirements, team expertise, performance considerations, and specific use cases.
                    If you have more specific <a href="">questions</a> or if there's a particular aspect you'd like to know more about, feel free to ask!
                </p>
                <a href="about.php"><button type="button" class="btn btn-primary">Check More</button></a>
            </div>
        </div>
    </section>

    <section class="cards  m-4">
        <div class="py-5">

            <h1 class="text-center display-4">Our Services for Language</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-3">
                    <div class="card" style="width: 19rem;">
                        <img src="images/code1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">HTML Code Seen :) </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go Check</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3">
                    <div class="card" style="width: 19rem;">
                        <img src="images/code3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sorce Codes :)</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go Check</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3">
                    <div class="card" style="width: 19rem;">
                        <img src="images/code2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JavaScript Code :) </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go Check</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center display-4">Content Now</h1>
        </div>
        <div class="w-50 m-auto">
            <form action="UserInfo.php" method="post" class="formText">
                <div class="form-group my-4">
                    <label for="User">User Name</label>
                    <input type="text" name="user" class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group my-4">
                    <label for="Email">Email Address</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email Address">
                </div>
                <div class="form-group my-4">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number">
                </div>
                <button class="btn btn-primary w-100" type="submit">Submit </button>
            </form>
        </div>

        <footer class="mt-5 text-center bg-white text-dark ">
            <h2 class="pt-2">@Computer languages</h2>
            <a href=""><i class="fa-brands fa-instagram" style="color:#cd486b" id="insta"></i></a>
            <a href=""><i class="fa-brands fa-facebook" style="color: #316FF6;"></i></a>
            <a href=""><i class="fa-brands fa-twitter" style="color: #1DA1F2;"></i></a>
        </footer>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>