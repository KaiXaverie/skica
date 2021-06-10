<!doctype html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>

    <div id="skin" class="row justify-content-md-center">
        <h1 style="font-family: Georgia">Sign Up</h1>

        <form action="/register.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6 nopadding">
                    <label for="first_name">First name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group col-md-6 right-padding">
                    <label for="last_name">Last name:</label>
                    <input type="text"name="lastname" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" required>
          </div>

          <div class="form-group">
              <label for="inputPassword4">Password:</label>
              <input type="password" name="password" class="form-control" id="inputPassword4" required>
          </div>

          <button  type="submit" class="btn btn-info">Submit</button>
      </form>
  </div>

<style>
    #skin {
        padding: 70px;
        color: white;
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        -ms-transform:translate(-50%,-50%);
        }
    #padding{
        padding: 0px;

        }
    .nopadding {
        padding: 0 !important;
        margin: 0 !important;
        }

    .right-padding {
        padding-right: 0 !important;
        }
    html {
        background: url(/back.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }

</style>
</body>
</html>
