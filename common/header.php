<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- head part  -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-0 py-3">
            <div class="container-xl">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <h1> Ecom </h1>
                </a>
                <!-- Navbar toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Nav -->
                    <div class="navbar-nav mx-lg-auto">
                        <a class="nav-item nav-link active" href="#" aria-current="page">Home</a>
                        <a class="nav-item nav-link" href="#">Product</a>
                        <a class="nav-item nav-link" href="#">Features</a>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                    </div>
                    <!-- Right navigation -->

                    <?php

                    if ($_SESSION) {
                        ?>
                        <div class="navbar-nav ms-lg-4">
                            <a class="nav-item nav-link" href="login.php">
                                <?php print_r($_SESSION['username']); ?>
                            </a>
                        </div>

                        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                            <a href="php/logout.php" class="btn btn-sm btn-primary w-full w-lg-auto">
                                Logout
                            </a>
                        </div>

                        <?php
                    } else {
                        ?>
                        <div class="navbar-nav ms-lg-4">
                            <a class="nav-item nav-link" href="login.php">
                                sign in
                            </a>
                        </div>

                        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                            <a href="register.php" class="btn btn-sm btn-primary w-full w-lg-auto">
                                Register
                            </a>
                        </div>
                        <?php
                    }

                    ?>

                    <!-- Action -->

                </div>
            </div>
        </nav>
    </header>