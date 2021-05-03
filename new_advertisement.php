<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Add Advertisement</title>
    <link rel="stylesheet" href="./Assets/CSS/AddAdvertisement.css">
    <link rel="stylesheet" href="./Assets/CSS/style.css">
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
                    <li>Log out</li>
                </a>
               
            </ul>
        </nav>
    </header>
    <!-- TOP NAVIGATION BAR SECTION -->
  
        <h1 class="heading">Add Advertisement</h1>
        <form  action="add_advertisement.php" method = "POST">
        <table>
            <tr><td> Title: </td><td><input type="text" name="Title"></td></tr>
            <tr><td> Details: </td><td><input type="varchar" name="Details"></td></tr>
            <tr><td> Dated: </td><td><input type="date" name="Dated"></td></tr>
            <tr><td> Price: </td><td><input type="int" name="Price"></td></tr>
            <tr><td> Category ID: </td><td><input type="varchar" name="Category_ID"></td></tr>
            <tr><td> User ID: </td><td><input type="varchar" name="User_ID"></td></tr>
            <tr><td> Moderator ID: </td><td><input type="varchar" name="Moderator_ID"></td></tr>
            <tr><td> Status ID: </td><td><input type="varchar" name="Status_ID"></td></tr>
            <tr><td><input type="submit" value="Submit" value ="insert"></td><td></td></tr>
        </table>
        </form>


</body>
</html>