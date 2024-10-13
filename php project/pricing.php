<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "Pricing"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    section{
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
                        <a class="nav-link  active" href="pricing.php"><?php echo "Pricing"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><?php echo "Contact"; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <div class="container-fluid bg-primary text-white text-center py-5">
            <h1 class="display-4 fw-normal"><?php echo "Pricing"; ?></h1>
            <p class="fs-5 text-white">
                <?php echo "Quickly build an effective pricing table for your potential customers with this
                Bootstrap example. It’s built with default Bootstrap components and utilities with little customization."; ?>
            </p>
        </div>
        
    <section>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"><?php echo "Free"; ?></h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"><?php echo "$0"; ?><small
                                class="text-muted fw-light"><?php echo "/mo"; ?></small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <?php echo "<li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>"; ?>
                        </ul>
                        <button type="button"
                            class="w-100 btn btn-lg btn-outline-primary"><?php echo "Sign up for free"; ?></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"><?="Pro"?></h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"><?="$15" ?><small
                                class="text-muted fw-light"><?="/mo" ?></small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <?="    <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>" ?>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary"><?="Get started" ?></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-white bg-primary border-primary">
                        <h4 class="my-0 fw-normal"><?="Enterprise" ?></h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"><?="$29" ?><small
                                class="text-muted fw-light"><?="/mo" ?></small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <?="    <li>30 users included</li>
                            <li>15 GB of storage</li>
                            <li>Phone and email support</li>
                            <li>Help center access</li>" ?>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary"><?="Contact us" ?></button>
                    </div>
                </div>
            </div>
        </div>
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