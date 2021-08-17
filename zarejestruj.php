<HTML>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <script>
            <?php
            if(isset($_COOKIE['m']))
            {
                echo('
                    document.documentElement.style
                        .setProperty("--base-color", "#A0A0A0");
                    document.documentElement.style
                        .setProperty("--second-color", "#10213B");
                ');
            }
            else
            {
               echo('
                    document.documentElement.style
                        .setProperty("--base-color", "#FCFCF4");
                    document.documentElement.style
                        .setProperty("--second-color", "#344D6E");
                ');
            }
            
            ?>
            
            
            
            function night_mode()
            {
                var mode = getComputedStyle(document.documentElement)
                                .getPropertyValue('--base-color');
                
                if(mode == '#FCFCF4')
                    {
                        document.documentElement.style
                            .setProperty('--base-color', '#A0A0A0');
                        document.documentElement.style
                            .setProperty('--second-color', '#10213B');
                        document.cookie = "m=1";
                    }
                else
                    {
                        document.documentElement.style
                            .setProperty('--base-color', '#FCFCF4');
                        document.documentElement.style
                            .setProperty('--second-color', '#344D6E');
                        document.cookie = "m= ; expires = Thu, 01 Jan 1970 00:00:00 GMT";
                    }
            }
        </script>
        <?php
            if(isset($_COOKIE['login']))
            {
                echo('
                <script>
                document.getElementById("dl").visibility = hidden;    
                </script>
                ');
            }
        ?>  
    </head>
    <body>
        
        <header>
            <div id="header_webside_title"> Strona internetowa.com</div>
            <div id="header_right">
                <p>
                <?php
                    
                if(isset($_COOKIE['login']))
                {
                    echo('Zalogowany');
                }
                else
                {
                    echo('Niezalogowany');
                }
                ?>        
                </p><img id="header_right_img" src="unloggined.png"></div>
            <div class="header_placeholder"></div>
            <div id="header_menu">
                <ol id="menu_1">
                    <li><a href="index.php">Sklep</a>
                        <ul>
                            <li><a href="komputery.php">Komputery</a></li>
                            <li><a href="telefony.php">Telefony</a></li>
                            <li><a href="laptopy.php">Laptopy</a></li>
                        </ul>
                    </li>
                    <li><a href="kontakt.php">Kontakt</a>
                        <ul>
                            <li
                                <?php
                                if(isset($_COOKIE['login']))
                                {
                                    echo("hidden");
                                    
                                }
                                   ?>
                                
                                
                                ><a
                                   
                                   href="zarejestruj.php" id="dl">Dołącz do nas</a></li>
                        </ul>
                    </li>
                    <li><a href="zdjecia.php">Galeria</a>
                        <ul>
                            <li><a href="zdjecia.php">Zdjęcia</a></li>
                        </ul>
                    </li>
                    <li><a href="moje_konto.php">Konto</a>
                        <ul>
                            <li><a href="zaloguj.php">Zaloguj</a></li>
                            <li><a href="moje_konto.php">Moje konto</a></li>
                        </ul>
                    </li>
                </ol>
            </div>
            <div class="header_placeholder"></div>
            <input type="button" onclick="night_mode()" id="nightmode" value="NIGHTMODE">
        </header>
        <div id="zal_midder">
            <div id="zal_midder0">
                
            </div>
            <div id="zal_midder1">
                <form name="logowanie" method="post" action="">
                    <h2>Utworz nowe konto.</h2><br>
                    <input type="text" placeholder="login" name="login">
                    <input type="text" placeholder="email" name="email">
                    <input type="password" placeholder="hasło" name="haslo"><br><br>
                    <input type="submit" value="ZAREJESTRUJ SIĘ"><br>
<?php

$servername = "localhost";
$username = "root";
$password = "";       
$conn = new mysqli($servername, $username, $password, "strona");

$sql_loginy = "SELECT login FROM uzytkownicy";
$loginy = mysqli_query($conn, $sql_loginy);
$len_loginy = mysqli_num_rows($loginy);
$czy_zajety_login = 0;
$zle_haslo = 0;
                    

if (isset($_POST["login"]) && isset($_POST["haslo"]) && isset($_POST["email"]))
{
    if(strlen($_POST["login"])==0 || strlen($_POST["haslo"])==0 || strlen($_POST["email"])==0)
    {
       print("Uzupełnij wszystkie pola"); 
    }
    else
    {
        for($i=0;$i<$len_loginy;$i++)
        {
            $rows_loginy = mysqli_fetch_row($loginy);
            if($rows_loginy[0] == $_POST["login"])
            {
            $czy_zajety_login = 1;
            }
        } 
        if($czy_zajety_login == 1)
        {
            print("Login zajęty");
        }
        if(strlen($_POST["haslo"])<8 || strlen($_POST["haslo"])>20)
        {  
            print("Hasło musi mieć między 8-20 znaków");
            $zle_haslo = 1;
        }
        if($zle_haslo == 0 && $czy_zajety_login == 0)
        {
            sleep(1);
            $sql = "INSERT INTO uzytkownicy (login, email, haslo) VALUES ('".$_POST["login"]."','".$_POST["email"]."','".$_POST["haslo"]."')";
            mysqli_query($conn, $sql);
            header("Location: zarejestrowano.html");
            exit();
        }
    }
}

?>
                    <br><br><a href="zaloguj.php">zaloguj</a>
                    
                </form>
            </div>
            <div id="zal_midder2">
                
            </div>
        </div>
        <footer>
            <div id="footer_lewy">Stronka stworzona przez:<b>Paweł Czaja</b></div>
            <div id="footer_prawy">Kontakty, Tel: <b>780 006 963</b> Email: <b> Pawel.poiu.czaja@gmail.com</b></div>
        </footer>
    
    </body>

    
        
        
</HTML>