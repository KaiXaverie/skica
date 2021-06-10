<!doctype html>

<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

?>

<html lang="en">
    <head>

        <title>Gallery</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Responsive meta tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand mb-0 h1"><svg width="1.0625em" height="1em" viewBox="0 0 17 16" class="bi bi-image-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.648 6.646a.5.5 0 0 1 .577-.093l4.777 3.947V15a1 1 0 0 1-1 1h-14a1 1 0 0 1-1-1v-2l3.646-4.354a.5.5 0 0 1 .63-.062l2.66 2.773 3.71-4.71z"/>
            <path fill-rule="evenodd" d="M4.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg> Gallery</a>
        <!-- button-->
        <!-- navbar-toggler for use with collapse plugin and other navigation toggling behaviors -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class"navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- navbar-nav for a full-height and lightweight navigation (including support for dropdowns)-->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="homelogin.php">Home<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul>
                <li class="nav-item active">
                    <a id="coloring" href="account.php"> My Account </a>
                </li>
            </ul>
            <ul>
                <li class="nav-item active">
                    <a id="coloring" href="logout.php"> Log out </a>
                </li>
            </ul>
            </div>
        </nav>

        <div id="jumbotron" class="jumbotron text-center text-white" style="background-image: url(/back.jpg)">

            <a class="btn btn-info" href="/upload.php" role="button">UPLOAD PHOTOS</a>


        </div>


<style>
    #coloring {
        color: white;
    }
</style>
</body>

</html>
