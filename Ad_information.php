<?php

include 'show_advertisement.php';

?>



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
                <a href="./homepage.php">
                    <li>Home</li>
                </a>
                <a href="./ad_information.php">
                    <li>View Advertisements</li>
                </a>
                <a href="./new_advertisement.php">
                    <li>Add Advertisements</li>
                </a>
                <a href="./logout.php">
                    <li>Log Out</li>
                </a>
                
            </ul>
        </nav>
    </header>
    <!-- TOP NAVIGATION BAR SECTION -->
    <div style = "padding-left:16px">
    <h2> Advertisement Information </h2>
    <?php echo $html ?>
    </div>




</body>

</html>