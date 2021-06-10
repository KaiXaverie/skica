<!-- open php
if ($_SERVER["REQUEST_METHOD"]=="POST") { //check if it is post method
    //header("Location: index.php");

    if (isset($_POST['login'])) { //is it login form

        if (empty($_POST['logemail'])) { //if field is empty run the code

        }
        else {
            $LoginEmail = $_POST['logemail']; //variable with email value
            if (!filter_var($LoginEmail, FILTER_VALIDATE_EMAIL)) { //if email is not valid
                    //header("Location: login.php");

            }

            //header("Location: index.php");
            }

    }else {header("Location: registration.php");}

}
else {

}
 ?> -->
