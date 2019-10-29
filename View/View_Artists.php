<?php
    Session_start();
    require_once("Connect.php");
    require_once("Function_Overall.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Main</title>
</head>

<body>
    <div class="w3-third w3-card-4" style="height: 100vh; position: fixed;">
        <div class="w3-display-container w3-twothird" style="width: 100%; height:40%">
            <img class="w3-display-topmiddle" src="Template Images/Circle.png" alt="Circle" style="max-width: 60%" allign="middle">
            <div class="w3-container w3-display-bottommiddle" style="bottom: 7vh;">
                <p style="text-align: center;font-size: 2vh;"><?php echo $_SESSION['Username']; ?></p>
            </div>
            <div class="w3-container w3-display-bottomleft">
                <p><?php echo $_SESSION['Email']; ?></p>
                <p>Favoritos: <?php echo $_SESSION['Favorites']; ?></p>
            </div>
        </div>
        <div class="w3-bar w3-border-teal w3-border-top w3-border-bottom">
            <form method="POST" action="Main.php">
                <input class="w3-button w3-border-teal w3-hover-teal" type="submit" value="Home" style="width:100%">
            </form>
            <form method="POST" action="Account_Config.php">
                <input class="w3-button w3-border-teal w3-hover-teal" type="submit" value="Perfil" style="width:100%">
            </form>
            <form method="POST" action="View_Arts.php">
                <input class="w3-rest w3-button w3-border-teal w3-hover-teal" type="submit" value="Ver Artes" style="width:100%">
            </form>
            <form method="POST" action="View_Artists.php">
                <input class="w3-button w3-border-teal w3-hover-teal" type="submit" value="Ver Artistas" style="width:100%">
            </form>
            <?php if (!isset($_SESSION)) {echo'
                <form method="POST" action="Welcome.php">
                    <input class="w3-rest w3-button w3-border-teal w3-hover-teal" type="submit" value="Entrar" style="width:100%">
                </form>
                <form>
                    <input class="w3-rest w3-button w3-border-teal w3-hover-teal" type="submit" value="Criar Conta" style="width:100%">
                </form>
                ';}
                else { echo'
                <form method="POST" action="Call_Logoff.php">
                    <input class="w3-rest w3-button w3-border-teal w3-hover-teal" type="submit" value="Sair" style="width:100%">
                </form>';
            }?>
        </div>
    </div>
    <div class="w3-display-container w3-twothird w3-right">
        <div class="w3-container w3-teal" style="width: 100%;">
            <h2 style="font-family: arial; font-size: 3vh; letter-spacing: 0.5vw;"> ARTISTAS </h2>
        </div>
        <ul>
            <li>
                <a href="View_Arts.php#Rosuuri"> Rosuuri </a>
            </li>
            <li>
                <a href="View_Arts.php#Sakuyu"> Sakuyu </a>
            </li>
            <li>
                <a href=""> Z-epto </a>
            </li>
            <li>
               <a href=""> Ishida Sui </a>
            </li>
            <li>
                <a href=""> Aoi Ogata </a>
            </li>
            <li>
                <a href=""> Tiv </a>
            </li>
            <li>
                <a href=""> Kudan </a>
            </li>
            <li>
                <a href=""> Koumi-Senpai </a>
            </li>
        </ul>
    </div>
</body>
</html>