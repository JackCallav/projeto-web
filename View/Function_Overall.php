<?php
    Function Create_Account($Username, $Email, $Password)
    {
        require_once("Connect.php");
        $Action = "INSERT INTO Usuario (Admin, Nome, Email, Senha) VALUES (False, '$Username', '$Email', '$Password')";
        $Result = mysqli_query($Connect, $Action);

        if($Result)
        {
            Setcookie("Conta" . $Row['ID'], $Row['ID'], time() + (24 * 60 * 60 * 360));
            $Message = "Conta criada com sucesso!";
            header("Location: Welcome.php");
        }
        else
        {
            $Message = "Falha ao criar conta!";
        }
    }

    Function Login($Email, $Password)
    {
        require_once("Connect.php");
        
        $Action = "SELECT * FROM Usuario WHERE Email = '$Email' AND Senha = '$Password'";
        $Result = mysqli_query($Connect, $Action);

        if ($Result)
        {
            Session_start();
            if($Row = mysqli_fetch_array($Result)){
            $_SESSION['Username'] = $Row['Nome'];
            $_SESSION['Email'] = $Row['Email'];
            $_SESSION['Password'] = $Row['Senha'];
            $_SESSION['Favorites'] = $Row['Artistas'];
            $_SESSION['ID'] = $Row['ID'];
            $_SESSION['Error'] = "";
            header("Location: Main.php");
            }
            else {
                $_SESSION['Error'] = "Um ou mais dados inseridos não coincidem!";
                header("Location: Welcome.php");
            }
        }
        
    }

    Function Logoff()
    {
        Session_destroy();
        header("Location: Welcome.php");
    }

    Function Edit($Username, $Email, $Password)
    {
        Session_Start();
        require_once("Connect.php");

        $Action = "UPDATE Usuario SET Nome ='" . $Username . "', Email ='" . $Email . "', Senha ='" . $Password . "' WHERE ID = '" . $_SESSION['ID'] . "'";
        $Result = mysqli_query($Connect, $Action);
        Session_Destroy();
        Session_Start();

        $Action = "SELECT * FROM Usuario WHERE Email = '$Email'";
        $Result = mysqli_query($Connect, $Action);

        if ($Result)
        {
            Session_start();
            if($Row = mysqli_fetch_array($Result))
            {
                $_SESSION['Username'] = $Row['Nome'];
                $_SESSION['Email'] = $Row['Email'];
                $_SESSION['Password'] = $Row['Senha'];
                $_SESSION['Favorites'] = $Row['Artistas'];
                $_SESSION['ID'] = $Row['ID'];
                $_SESSION['Error'] = "";
                header("Location: Account_Config.php");
            }
        }
    }

    function WallpaperEdit()
    {
        Session_Start();
        $Wallpaper = $_POST['Wallpaper'];
        $Path = "Template Images/";
        $Extension = ".jpg";
        $CookieName = "Conta" . $_SESSION['ID'];
        $_SESSION["Wallpaper"] = "$Path" . "$Wallpaper" . "$Extension";

        Setcookie($CookieName, $_SESSION["Wallpaper"], time() + (24 * 60 * 60 * 360));
        header("Location: Main.php");
    }
?>