<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "Contact"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    section {
        margin: 20px;
        padding: 20px;
    }
    </style>
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
                        <a class="nav-link" href="feature.php"><?php echo "Features"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.php"><?php echo "Pricing"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="contact.php"><?php echo "Contact"; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid bg-dark text-white text-center py-4">
    <h1 style="text-align:center"><?= "Contact" ?></h1>
    </div>
    <section>
        <form>

            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"><?= "First Name" ?></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="First name"  
                        aria-label="First name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"><?= "Last Name" ?></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Last name"
                        aria-label="Last name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"><?= "Email" ?></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label"><?= "Password" ?></label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label"><?= "Re-Write Password" ?></label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button"><?= "Submit" ?></button>
            </div>
        </form>
    </section>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <?php echo "<p>&copy; 2024 LOOK_UP. All rights reserved.</p>"; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>