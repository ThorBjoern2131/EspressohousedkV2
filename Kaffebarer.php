<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Espresso House - Passionate About Coffee</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="description" content="Espresso house homepage">
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="keywords" content="Espresso house, kaffe bar">
    <meta property="og:title" content="Espresso house - Passionate About Coffe"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.EspressohousedkV2.dk"/>
    <meta property="og:image" content="https://www.EspressohousedkV2.dk/images/EspressoLogo.png"/>
    <meta property="og:description" content=""/>
    <meta property="og:locale" content="da_DK"
    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<div class="grid-container">
    <div class="empty"></div>
    <a href="index.php">
        <div class="Logo">
            <img class="Logo" src="images/EspressoLogo.png" alt="Espresso Logo">
        </div> </a>
</div>


<div class="topnav">
    <a href="index.php" style="font-size:30px;font-family: Arial;">Home</a>
    <a href="OmOs.php" style="font-size:30px;font-family: Arial;">Om Os</a>
    <a href="App.php" style="font-size:30px;font-family: Arial;">App</a>
    <a href="Kaffebarer.php" style="font-size:30px;font-family: Arial;">Kaffebarer</a>
</div>

<br><br><br>
<h1 style="text-align:center">Error 404 Page Not Found</h1>

<center><img class="img" src="images/404coffee.png" alt="Error 404 Image Not Found" style="width:500px;height:500px;"></center>

<footer>
    <nav>
        <p class="footl">Åbningstider:
            <br>
            Mandag-Fredag: 07:00 - 19:00
            <br>
            Lørdag: 08:00 - 18:00
            <br>
            Søndag: 09:00 - 18:00
        </p>
    </nav>
    <div class="topnav2">
        <i class="fab fa-facebook" style="font-size:20px">Espresso House Denmark</i>
        <div class="insta">
            <i class="fab fa-instagram" style="font-size:20px;margin-right: 20%">EspressoHouse_Denmark</i>
        </div>
        <div class="twitter">
            <i class="fab fa-twitter" style="font-size:20px;margin-right: 20%">EspressoHouse_Denmark</i>
        </div>
        <div class="twitter">
        </div>
    </div>
    <nav>
        <p class="footr">
            Espresso House
            <br>
            info_dk@espressohouse.com
        </p>
    </nav>
</footer>

</body>
</html>
