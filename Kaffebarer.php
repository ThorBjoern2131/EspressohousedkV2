<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Espresso House - Kaffebarer</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="description" content="Espresso house homepage">
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="keywords" content="Espresso house,">
    <meta property="og:title" content="Espresso house - Passionate About Coffe"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.EspressohousedkV2.dk"/>
    <meta property="og:image" content="https://www.EspressohouseskV2.dk/images/EspressoLogo.png"/>
    <meta property="og:description" content=""/>
    <meta property="og:locale" content="da_DK"
    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<a href="index.php">
    <div class="Logo">
        <img class="Logo" src="images/EspressoLogo.png" alt="Espresso Logo">
    </div> </a>

<div class="header">
    <h1 style="font-size:100px;" id="grad1">Espresso House</h1>
</div>

<div class="topnav">
    <a href="index.php" style="font-size:30px;">Om os</a>
    <a href="OmOs.php" style="font-size:30px;">App</a>
    <a href="App.php" style="font-size:30px;">kaffebarer</a>
    <a href="Kaffebarer.php" style="font-size:30px;">App</a>
</div>

<br><br><br>
<h1 style="text-align:center">Error 404 Page Not Found</h1>

<center><div class="404"><a href="index.php"><img src="images/404coffee.png" alt="404" width="600"></a></div></center>

</body>
</html>