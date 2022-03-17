<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <script src="https://kit.fontawesome.com/26e840afe9.js" crossorigin="anonymous"></script>

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Espresso House - Passionate About Coffee</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="description" content="Espresso house homepage">
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="keywords" content="Espresso house,">
    <meta property="og:title" content="Espresso house - Passionate About Coffe"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.EspressohousedkV2.dk"/>
    <meta property="og:image" content=""/>
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
    <div class="header">
        <div class="topnav">
            <a href="index.php" style="font-size:30px;font-family: Arial,serif;">Home</a>
            <a href="OmOs.php" style="font-size:30px;font-family: Arial,serif;">Om Os</a>
            <a href="App.php" style="font-size:30px;font-family: Arial,serif;">Kaffebarer</a>
            <a href="Kaffebarer.php" style="font-size:30px;font-family: Arial,serif;">App</a>
        </div>
    </div>
<div class="row">
    <div class="leftcolumn" style="background-color:#ffffff;">
        <div class="card">
            <br><br>
            <center><h1>Velkommen til Espresso House!</h1></center>
            <br>
                <center><p>Her har vi et stort udvalg af klimavenlige kaffe, kage, te og meget mere! <br><br>
                Kom forbi et af vores mange lokationer, hvor du enten kan nyde noget varmt med en bekendt eller noget koldt over en bog. <br></center>
            <center><img class="Hero" src="images/EspressoApp2.jpg" alt="Error 404 Image Not Found" style="width:80%;"></center>
            <br>
            <center><p>I denne måned kører vi 10% rabat på hele vores sortiment af varm chokolade. <br>
                Alt på vores kaffe menu kan alternativt laves plantebaseret, så den passer til en hver smag.
            </p></center>
            <br>
        </div>
    </div>
    

<div class="grid-container">
</div>
    <br>
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
