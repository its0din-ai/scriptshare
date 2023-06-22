<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/img/fav.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./public/css/app.css">
    <title> <?= $judul ?> - ScriptShare</title>
</head>

<body data-bs-theme="dark">
    <nav class="navbar sticky-top navbar-expand-md bg-body-tertiary">
        <div class="container-fluid mx-sm-5">
            <a class="navbar-brand" href="/"><img src="./public/img/ss.png" width="50px" /></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex me-3">
                    <?php
                    $adaSesiLogin = isset($_SESSION['users']);
                    if ($adaSesiLogin) {
                        echo '<li class="nav-item">
                                <a href="/dashboard" class="btn btn-sm btn-outline-info">Dashboard</a>
                            </li>';
                    }else{
                        echo '<li class="nav-item">
                                
                            </li>';
                    }
                    ?>
                        
                </ul>
                <ul class="navbar-nav d-flex">
                    <?php
                    $adaSesiLogin = isset($_SESSION['users']);
                    if ($adaSesiLogin) {
                        echo '<li class="nav-item">
                                <a href="/logout" class="btn btn-sm btn-outline-danger">Logout</a>
                            </li>';
                    }else{
                        echo '<li class="nav-item">
                                <a href="/login" class="btn btn-sm btn-outline-light">Login</a>
                            </li>';
                    }
                    ?>
                        
                </ul>


            </div>
        </div>
    </nav>