<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>PHP Website </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Charm:wght@400;700&family=Cinzel+Decorative:wght@400;700;900&family=Homemade+Apple&family=Italianno&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Kaushan+Script&family=Merienda:wght@300..900&family=Oranienbaum&family=Rubik+Doodle+Shadow&family=Satisfy&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0 bg-dark text-white">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <h1>Mohd Hadi</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0" style="margin-left:60%">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
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

    <div class="jumbotron bg-white text-dark">
        <h1 class="">Mohd Hadi Content :) </h1>
        <p>We Have a Web Developer Write The Lots Of Codes :)</p>
    </div>

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
            <h2 class="pt-2">@MohdHadiZaidi</h2>
            <a href=""><i class="fa-brands fa-instagram" style="color:#cd486b" id="insta"></i></a>
            <a href=""><i class="fa-brands fa-facebook" style="color: #316FF6;"></i></a>
            <a href=""><i class="fa-brands fa-twitter" style="color: #1DA1F2;"></i></a>
        </footer>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</body>

</html>