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
                        <a class="nav-link" href="services.php"><?= "Services"; ?></a>
                    </li>
                    <li class="nav-item  border border-1 border-dark">
                        <a class="nav-link active" href="contactus.php"><?= "Contact Us"; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container col-md-12 bg-light">
        <div class="container px-0">
            <h1 class="text-center my-5 fs-1">
                <u><?= "Let’s Work Together"; ?></u>
            </h1>
            <h3><?= "We’d Love to Hear From You."; ?></h3>
        </div>
        <div class="container-fluid fs-4 my-4 px-0 fw-normal">
            <p>
                <?= "Whether you have a project in mind, need some advice, or just want to chat, our team is here to help
                bring your vision to life."; ?>
            </p>
            <h2><?= "Contact Form Fields: "; ?><br></h2>
        </div>
        <div class="container ">
            <form>
                <label>
                    <h4 class="mb-2">
                        <?= "Name :"; ?>
                    </h4>
                </label><br>
                <input type="text" placeholder="Enter your Name.." style="width: 80%;"><br><br>

                <h4 class="mb-2">
                    <?= "E-mail :"; ?>
                </h4><br>
                <input type="email" placeholder="Enter your E-mail.." style="width: 80%;"><br><br>

                <label class="mb-2">
                    <h4 class="mb-2">
                        <?= "Message :"; ?>
                    </h4>
                </label>
                <br>
                
                <textarea rows="3" placeholder="Enter your Message here.." style="width: 80%;"></textarea><br><br>

                <button class="btn btn-secondary fs-4 my-3" type="button">
                    <?= "Submit"; ?>
                </button>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle fs-4 my-3" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?= "Service Of Interest"; ?>
                    </button>
                    <ul class="dropdown-menu fs-4" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item"><?= "Branding"; ?></a></li>
                        <li><a class="dropdown-item"><?= "Web Design"; ?></a></li>
                        <li><a class="dropdown-item"><?= "Digital Marketing"; ?></a></li>
                    </ul>
                </div>
            </form><br>

            <b class="fs-5"><?= "Additional Contact Information:"; ?><br>
            <?= "Email: hello@visionarycreatives.com"; ?><br>
                <?= "Phone: +1 (234) 567-8900"; ?><br>
                <?= "Address: 123 Creative Ave, Suite 101, Your City, USA"; ?></b>
        </div>

        <h2 class="my-3"><?= "Ready to Start Your Project?"; ?><br></h2>
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