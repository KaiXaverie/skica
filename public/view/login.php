<!doctype html>
<html lang="en">
<head>
  <title>Gallery</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>


    <div id="appearance" class="row justify-content-md-center">
        <h1 style="font-family: Georgia">Log in</h1>

        <form method="post" action="validation.php">

            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"  name="log"> Remember me
                </label>
            </div>

            <button  type="submit" name="login" class="btn btn-info">Submit</button>
      <!--
    <input type="submit" name="log" value="Register" class="bg-info">
     -->
        </form>

    </div>

<!--
action="/action_page.php"
-->


<style>
  #appearance {
  padding: 70px;
  color: white;
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  -ms-transform:translate(-50%,-50%);
    }
    #first {
      padding: 10px;
      <!-- color for appearance-->
      border-style: groove;
      font-family: Candara;
      background-color: rgb(95, 158, 160, 0.5);

    }
    #second {
      padding: 10px;
    }
    #third {
      padding: 10px;

    }
    #fourth {
      padding: 10px;
      background-color: rgb(0,0,20,0.62);

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
