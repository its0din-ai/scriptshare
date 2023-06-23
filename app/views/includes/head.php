<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/img/fav.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./public/css/app.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title> <?= $judul ?> - ScriptShare</title>
</head>

<body data-bs-theme="dark">
    <nav class="navbar sticky-top navbar-expand-md bg-body-tertiary">
        <div class="container-sm content-align-center">
            <a class="navbar-brand" href="/"><img src="/public/img/ss.png" width="50px" /></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto">
                    <li class="nav-item me-auto">
                        <a class="nav-link" href="/#">Home</a>
                    </li>
                    <li class="nav-item me-auto">
                        <a class="nav-link" href="/#about">About</a>
                    </li>
                    
                    <?php
                    $adaSesiLogin = isset($_SESSION['users']);
                    if ($adaSesiLogin) {
                        echo '<li class="nav-item dropdown me-auto mt-auto mb-auto">
                        <button class="btn btn-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dashboard
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/dashboard">Home</a></li>
                            <li><a class="dropdown-item" href="/dashboard/script">Share a Scripts</a></li>
                            <li><a class="dropdown-item" href="/dashboard/short">Short a Links</a></li>
                        </ul>
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