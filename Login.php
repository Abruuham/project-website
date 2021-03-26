

<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login-style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./css/forms.js"></script>

  <!-- <link rel="stylesheet" href="./css/all.css"> -->
  <title>Document</title>
</head>
<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active noselect">Sign Up</h2>
      <h2 class="inactive underlineHover noselect" id="change">Sign In</h2>

      <!-- <a href=" login.php?p=su"><h2 class= <?= ((isset($_GET["id"])) && $_GET['p'] == 'su') ? "active noselect" : "inactive underlineHover noselect" ?>> Sign Up </h2></a>
      <a href=" login.php?p=li"><h2 id="change" class= <?= ((isset($_GET["id"])) && $_GET['p'] == 'li') ? "active noselect" : "inactive underlineHover noselect" ?>> Log In </h2></a> -->


  
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="./img/atom.png" style="width:30px;height:30px;" id="icon" alt="User Icon" />
      </div>
  
      <!-- Login Form -->
      <form id="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" id="signUp" class="fadeIn second" name="username"  placeholder="Sign Up" class ="form-control<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">


        <span class="invalid-feedback"><?php echo $username_err; ?></span>



        <input type="password" id="password" class="fadeIn third" name="password"  placeholder="password" class="form-control
        <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">

        
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
        <input type="submit" class="fadeIn fourth" value="Sign Up">
      </form>
      <form id="form2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" id="signUp" class="fadeIn second" name="username"  placeholder="Sign In" class ="form-control<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">


        <span class="invalid-feedback"><?php echo $username_err; ?></span>



        <input type="password" id="password" class="fadeIn third" name="password"  placeholder="gfgsfgsfg" class="form-control
        <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">

        
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>



  
      <!-- Remind Passowrd -->
      <!-- <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div> -->
  
    </div>
  </div>
  
</body>
</html>