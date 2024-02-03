<?php require 'header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="form">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register </button>
            </div>
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="Username" required>
                <input type="password" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn"><a href="dashboard.php">Log In</a></button>
            </form>
             <div></div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="register" class="input-group">
                <input type="email" name="email" class="input-field" placeholder="Email " required>
                <input type="text"  name="username" class="input-field" placeholder="Username" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox"  class="check-box"><span>I agree to the terms & conditions</span>
                <button type="submit" name="registerBtn" class="submit-btn">Register</button>
            </form>
            <?php include_once 'registerController.php';?>
            </div>


        </div>
        
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
        
      
    </script>

    
</body>
</html>
