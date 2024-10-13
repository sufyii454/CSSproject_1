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
                        <a class="nav-link" href="aboutus.php"><?= "About Us"; ?></a>
                    </li>
                    <li class="nav-item  border border-1 border-dark">
                        <a class="nav-link active" href="services.php"><?= "Services"; ?></a>
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
                <u><?="Crafting Your Brand’s Future"; ?></u>
            </h1>
            <h3><?="Comprehensive Services for Every Stage of Your Brand’s Journey."; ?></h3>
        </div>
        <div class="container-fluid fs-4 my-4 px-0 fw-normal">
            <p>
                <?="From brand development to fully immersive digital experiences, we offer a wide range of creative
                services tailored to your unique needs."; ?>
            </p>

        </div>
        <div class="container-fluid px-0 ">
            <h2 class="mb-4"><?="Services List:"; ?></h2>
            <div class="container row ">
                <div style="list-style-type: none; " class="container d-flex">
                    <div class="container rounded-3 col-md-4 card card-body mx-3 py-0 px-0">
                        <img src="wd2.webp">
                        <li class="my-3 fw-bold rounded px-2">
                            <h4><?="Branding & Identity:"; ?></h4><br>
                            <p><?="Craft a unique brand identity with logo design, brand strategy, and style guidelines."; ?></p>
                        </li>
                    </div>
                    <div class="container rounded-3 col-md-4  card card-body mx-3 py-0 px-0">
                        <img src="pexels-junior-teixeira-1064069-2047905.jpg">
                        <li class="my-3 fw-bold rounded px-2">
                            <h4><?="Web Design & Development:"; ?></h4><br>
                            <p><?="We build responsive, user-friendly websites with custom designs and seamless
                                functionality."; ?></p>
                        </li>
                    </div>
                    <div class="container rounded-3 col-md-4  card card-body mx-3 py-0 px-0">
                        <img src="wd.jpg">
                        <li class="my-3 fw-bold rounded px-2">
                            <h4><?="Digital Marketing & SEO:"; ?></h4><br>
                            <p><?="Reach your audience with targeted campaigns, SEO optimization, and social media
                                strategies."; ?></p>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">

            <h3><?="CTA :"; ?></h3>
            <p class="fw-bold">
                <?="Ready to Transform Your Brand? "; ?><button class="my-3 px-3">
                    <?="YES"; ?>
                </button>
                <button class="my-3 px-3">
                    <?="No"; ?>
                </button>
            </p>
        </div>
        <div class="container fw-normal fs-3">
            <?="Contact Us to Learn More"; ?><br>
            <?="Schedule a Free Discovery Call - 956*****08"; ?>

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