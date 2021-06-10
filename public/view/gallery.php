<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gallery</title>

  </head>
  <body>

      <!-- navbar brand - for your company, product, or project name Application name on header-->
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
                      <a class="nav-link" href="/index.php">Home<span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="/login.php">Login</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="/registration.php">Registration</a>
                  </li>

                  </ul>
              </div>
          </nav>

          <div id="jumbotron" class="jumbotron text-center text-white" style="background-image: url(/back.jpg)">

              <h1 class="display-4 mt-5">Welcome to Gallery!</h1>
              <p class="lead">We will help you save the memories and share them!</p>
              <hr class="my-4">
              <p>Search for amazing photos!</p>
              <a class="btn btn-info" href="/index.php" role="button">SEE PHOTOS</a>

          </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>

  <style>
    html {
        background: url(/.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    #jumbotron {
        margin-bottom: 0px;
        height: 100vh;

    }

  </style>
</html>
