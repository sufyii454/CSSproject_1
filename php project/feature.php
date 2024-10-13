<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Feature"; ?> </title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo "WEB LOOK_UP"; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php"><?php echo "Home"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="feature.php"><?php echo "Features"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.php"><?php echo "Pricing"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><?php echo "Contact"; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <div class="container-fluid bg-primary text-white text-center py-5">
        <h1><?php echo "Features are Addressed"; ?></h1>
        <p class="lead"><?php echo "I am a web developer specialized in building modern web applications."; ?></p>
    </div>

    <!-- Projects Section -->
    <div class="container py-5">
        <h2 class="text-center mb-4"><?php echo " Recent Work"; ?></h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="wd2.webp" width=350 height=250 class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Consulting"; ?></h5>
                        <p class="card-text"><?php echo "A brief description of the project goes here."; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="marketing img.jpg" width=350 height=250 class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Marketing"; ?></h5>
                        <p class="card-text"><?php echo "A brief description of the project goes here."; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="pexels-olly-1050312.jpg" width=350 height=250 class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Development"; ?></h5>
                        <p class="card-text"><?php echo "A brief description of the project goes here."; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container col-md-12">

        <hr class="featurette-divider">
        <div class="row featurette d-flex justify-content-center align-content-center text-align-center py-5">
            <div class="col-md-7">
                <h2 class="featurette-heading">Consulting. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                    prose
                    here.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="wd2.webp" class="img-fluid" width="500" height="500">
                <rect width="100%" height="100%" fill="#eee"></rect>

            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <?php echo "<p>&copy; 2024 LOOK_UP. All rights reserved.</p>"; ?>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>