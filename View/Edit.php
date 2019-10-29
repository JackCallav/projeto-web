<?php
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
    <title>Editar</title>
</head>
<body>
    <div class="w3-third w3-display-middle w3-card-4" style="width: 35vw; height: 50vh;">
        <p class="w3-center w3-teal" style="font-size: 3vh; font-family: arial;"><b> ART LIFE </b></p>
        <div class="w3-container">
            <form method="POST" action="Call_Edit.php">
                <p> <i class="material-icons" style="color: teal;">account_circle</i> Nome de Usuário: <input class="w3-input w3-border-bottom w3-hover-light-gray" type="text" name="Username" placeholder="Digite seu nome de usuário..." required/></p>
                <p> <i class="material-icons" style="color: teal;">email</i> E-mail: <input class="w3-input w3-border-bottom w3-hover-light-gray" type="email" name="Email" placeholder="Digite sua e-mail..." required/></p>
                <p> <i class="material-icons" style="color: teal;">lock</i> Senha: <input class="w3-input w3-border-bottom w3-hover-light-gray" type="password" name="Password" placeholder="Digite sua senha..." required/></p>
                <input class="w3-button w3-border w3-teal w3-third w3-display-bottommiddle" type="submit" value="Editar" style="bottom: 3vh;"/>
            </form>
        </div>
    </div>
</body>
</html>