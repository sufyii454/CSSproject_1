<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="website icon" type="png" href="design icon.png">
    <title><?= "Visionary Creatives"; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav
        class="navbar navbar-expand-lg navbar-light  fw-bold bg-secondary bg-gradient border border-2 border-dark border-opacity-25 border-start-0 rounded-end">
        <div class="container-fluid mt-1 py-2">
            <a class="navbar-brand text-white" href="#"><img src="design icon.png" width=50
                    height=50><?= "VISIONARY CREATIVES"; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item  border border-1 border-dark">
                        <a class="nav-link" aria-current="page" href="index.php"><?= "Home"; ?></a>
                    </li>
                    <li class="nav-item  border border-1 border-dark">
                        <a class="nav-link active" href="aboutus.php"><?= "About Us"; ?></a>
                    </li>
                    <li class="nav-item  border border-1 border-dark">
                        <a class="nav-link" href="services.php"><?= "Services"; ?></a>
                    </li>
                    <li class="nav-item  border border-1 border-dark">
                        <a class="nav-link" href="contactus.php"><?= "Contact Us"; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container col-md-12 bg-light">
        <div class="container px-0">
            <h1 class="text-center my-5 fs-1">
                <u><?="Our Story: Passion Meets Purpose"; ?></u>
            </h1>
            <h3><?="Meet the Creative Minds Behind Visionary Creatives."; ?></h3>
        </div>
        <div class="container-fluid fs-4 my-4 px-0 fw-normal">
            <p>
                <?="Founded in 2020, Visionary Creatives started with a singular goal – to empower brands to tell their
                stories through creative design and digital innovation. Our team consists of a diverse group of
                thinkers, artists, and problem solvers dedicated to pushing boundaries and delivering excellence."; ?>
            </p>
            <p>
                <?="Visionary Creatives started with a singular goal – to empower brands to tell their stories through
                creative design and digital innovation. Our team consists of a diverse group of thinkers, artists, and
                problem solvers dedicated to pushing boundaries and delivering excellence."; ?>
            </p>
        </div>
        <div class="container d-flex mb-5">
            <div class="container col-md-7 align-content-center">
                <h3><?="Our Vision:"; ?></h3>
                <p class="fs-4"><?="Empowering brands to be innovative and future-focused."; ?></p>
            </div>
            <div class="container col-md-5">
                <img src="45.webp" width=100% height=100% class="rounded">
            </div>
        </div>
        <div class="container d-flex mb-5">
            <div class="container col-md-5 ">
                <img src="wd2.webp" width=100% height=90% class="rounded">
            </div>

            <div class="container col-md-7 align-content-center">
                <h3><?="Our Team:"; ?></h3>
                <p class="fs-4"><?="Introduce team members with photos, names, and short bios (e.g., Founder, Lead Designer,
                    Marketing Strategist)."; ?>
                </p>
            </div>
        </div>
        <div class="container d-flex mb-5">
            <div class="container col-md-7 align-content-center">
                <h3><?="Our Values:"; ?></h3>
                <p class="fs-4"><?="Collaboration, Creativity, and Commitment to Quality."; ?></p>
            </div>
            <div class="container col-md-5">
                <img src="pik.webp" width=100% height=100% class="rounded">
            </div>
        </div>
    </div>
    <!-- footer!! -->
    <div class="container-fluid col-md-12 bg-secondary bg-gradient">
        <footer class="mt-4">
            <div class="container d-flex px-0">
                <div class="container fs-6">
                    <ul style="list-style-type: none; padding: 0px; margin: 0px;">
                        <li class="fs-4"><b><?= "Section"; ?></b></li>
                        <li href="#items"><?= "Home"; ?></li>
                        <li href="#items"><?= "About us"; ?></li>
                        <li href="#items"><?= "Services"; ?></li>
                        <li href="#items"><?= "Contact Us"; ?></li>
                    </ul>
                </div>
                <div class="container mt-2">
                    <form>
                        <b><?= " Subscribe to our Visionary Creative"; ?></b><br>
                        <p class="mb-0"><?= "Monthly digest of what's new and exciting from us."; ?></p>
                        <h5><?= "Email:"; ?><br><input type="text" class="bg-light rounded-3" placeholder="Enter your E-mail"></h5>
                        <button class=""><?= "Subscribe"; ?></button>
                    </form>
                </div>
            </div>
            <hr class="mb-1">
            <div class="container d-flex">
                <div class="container px-0">
                    <p><?= "© 2024 Company, Inc. All rights reserved."; ?></p>
                </div>
                <div class="container fs-3 pb-3">
                    <ul style="list-style-type: none; padding: 0px; margin: 0px; display: flex; float: inline-end;">
                        <li><i class="fab fa-twitter-square px-2 "></i></li>
                        <li><i class="fab fa-instagram px-2"></i></li>
                        <li><i class="fab fa-facebook px-2"></i></li>
                    </ul>
                </div>
            </div>

        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>



</html>