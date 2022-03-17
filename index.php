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
    <a href="index.php">
        <div class="Logo">
            <img class="Logo" src="images/EspressoLogo.png" alt="Espresso Logo">
        </div> </a>
</div>

<div class="header">
    <div class="topnav">
        <a href="index.php" style="font-size:30px;">Home</a>
        <a href="OmOs.php" style="font-size:30px;">Om Os</a>
        <a href="App.php" style="font-size:30px;">Kaffebarer</a>
        <a href="Kaffebarer.php" style="font-size:30px;">App</a>
    </div>
</div>

<div class="row">
    <div class="leftcolumn" style="background-color:#f1f1f1;">
        <div class="card">
            <h2>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</h2>
            <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM
            <img class="img" src="images/EspressoApp1.jpg" alt="Error 404 Image Not Found" style="width:1400px;height:800px;">
            <br>
            <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p>
            <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p>
            <br>
            <h3>twitter.com/EspressoHouseDK</h3>
            <br>
            <h3>Email - EspressoHouseDK.com</h3>
        </div>
    </div>
    

<div class="grid-container">
    <div class="topnav2">
        <i class="fab fa-facebook" style="font-size:50px";>Espresso House Denmark</i>
        <div class="insta">
            <i class="fab fa-instagram" style="font-size:50px;margin-right: 20%">EspressoHouse_Denmark</i>
        </div>
        <div class="twitter">
            <i class="fab fa-twitter" style="font-size:50px;margin-right: 20%">EspressoHouse_</i>
        </div>
        <div class="twitter">
            <i class="fab fa-mail" style="font-size:50px;margin-right: 20%">info_dk@espressohouse.com</i>
        </div>
    </div>
</div>
<br>

</body>
</html>
