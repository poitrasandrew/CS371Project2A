
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/CSS/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Advertisements Manager</title>
    <script src="./Assets/js/index.js"></script>
</head>

<body>
    <!-- TOP NAVIGATION BAR SECTION -->
    <header>
        <figure class="brand"><img src="./Assets/Images/logo.png" alt="" class="header-logo"></figure>
        <nav class="menu">
            <input type="checkbox" id="menuToggle">
            <label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i></label>
            <ul>
               
                <a href="./access_login.php">
                    <li>Login</li>
                </a>
                <a href="./register.php">
                    <li>Register</li>
                </a>
            </ul>
        </nav>
    </header>
    <!-- TOP NAVIGATION BAR SECTION -->







  

    
    <form class="form" method="post" name="login" action="login.php">
        <h1 class="login-title">Login</h1>
        Email:<div style = "padding-left:1px"> <input type="varchar" class="login-input" name="Email" placeholder="Email..." required><br><br>
        Password:<div style = "padding-left:1px"><input type="password" class="login-input" name="Password" placeholder="Password..." required><br><br>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="Register.php">Don't have an account? Register here!</a></p>
    </form>

</body>
</html>