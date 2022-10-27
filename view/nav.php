<?php include_once "CheckGen/session.php" ?>
<div class="container-fluid bg-primary">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="text text-white navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="me-5 collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="text text-white nav-link active" aria-current="page" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="text text-white nav-link" href="#">Politics</a>
                    </li>

                    <li class="text-white nav-item">
                        <a class="text text-white nav-link ">Wars</a>
                    </li>
                    <li class="text-white nav-item">
                        <a class="text text-white nav-link ">IT News</a>
                    </li>
                    <?php

                    if (checkSession('user')) {
                        echo '<li class="text-white nav-item dropdown">
                            <a class="text text-white nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                 ';
                        echo getSession('user');
                        echo '</a>
                            <ul class="dropdown-menu">
                     
                                <li><a class="text dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>';
                    } else {
                        echo ' <li class="text-white nav-item dropdown">
                            <a class="text text-white nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                     Members
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="text dropdown-item" href="register.php">Register</a></li>
                                <li><a class="text dropdown-item" href="../blog/login.php">Login</a></li>
                                
                            
                            </ul>
                        </li>';
                    }

                    ?>


                </ul>

            </div>
        </div>
    </nav>
</div>