<HTML>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style4.css">
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
                </p><img id="header_right_img" src="
                    <?php
                                if(isset($_COOKIE['login']))
                                {
                                    echo("loggined.png");
                                    
                                }
                                else
                                {
                                    echo("unloggined.png");
                                }
                                   ?>
                    
                    "></div>
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
                    <li><a href="#">Galeria</a>
                        <ul>
                            <li><a href="zdjecia.php">Zdjęcia</a></li>
                            <li><a href="#">Filmy</a></li>
                        </ul>
                    </li>
                    <li><a href="moje_konto.php">Konto</a>
                        <ul>
                            <li><a href="
                                <?php
                                if(isset($_COOKIE['login']))
                                {
                                    echo("wyloguj.php");
                                    
                                }
                                else
                                {
                                    echo("zaloguj.php");
                                }
                                    
                                ?>
                                ">
                                <?php
                                if(isset($_COOKIE['login']))
                                {
                                    echo("Wyloguj");
                                }
                                else
                                {
                                    echo("Zaloguj");
                                }
                                
                                ?></a></li>
                            <li><a href="moje_konto.php">Moje konto</a></li>
                        </ul>
                    </li>
                </ol>
            </div>
            <div class="header_placeholder"></div>
            <input type="button" onclick="night_mode()" id="nightmode" value="NIGHTMODE">
        </header>
        <p class="title">TELEFONY</p>
        <div class="placeholder2"></div>
        <div id="k_midder">
            <div id="midder0">
                <form action="telefony.php" method="post">
                    <h2>FILTRY</h2><br>
                    <p> Zakres ceny </p>
                    od <input type="number" class="cena" placeholder="min cena w zł" name="min_cena"><br>
                    do <input type="number" class="cena" placeholder="max cena w zł" name="max_cena"><br>
                    <br>
                    
                    <p>Producent</p>
                    <span>
                    <input type="checkbox" class="producent" name="Apple"> Apple<br>
                    <input type="checkbox" class="producent" name="Samsung"> Samsung<br>
                    <input type="checkbox" class="producent" name="Xiaiomi"> Xiaiomi<br>
                    <input type="checkbox" class="producent" name="Sony"> Sony<br>
                    </span>
                    <br><br><br><br><br>
                    <input type="submit" value="Wyszukaj">
                </form>
            </div>
            <div id="midder1">
                <?php
                    
$servername = "localhost";
$username = "root";
$password = "";       
$conn = new mysqli($servername, $username, $password, "strona");


    if(isset($_POST['min_cena']) || isset($_POST['max_cena']) || isset($_POST['Apple']) || isset($_POST['Samsung']) || isset($_POST['Xiaiomi']) || isset($_POST['Sony']))
    {
        echo(' <p id="af"> Aktualne filtry:  ');
        if(is_numeric($_POST['min_cena']))
        {
            $min_cena = $_POST['min_cena'];
            echo(" | ".$_POST['min_cena']);
        }
        else
        {
            $min_cena = 0;
            echo(' | 0zł');
        }
        echo(" - ");
        if(is_numeric($_POST['max_cena']))
        {
            $max_cena = $_POST['max_cena'];
            echo($_POST['max_cena']."zł");
        }
        else
        {
            echo('bez limitu');
            $max_cena = 999999;
        }
        if(isset($_POST['Apple']))
        {
            $marka1 = 'apple';
            echo(' | Apple  ');
        }
        else
        {
            $marka1 = 'a';
        }
        if(isset($_POST['Samsung']))
        {
            $marka2 = 'samsung';
            echo(' | Samsung ');
        }
        else
        {
            $marka2 = 'a';
        }
        if(isset($_POST['Xiaiomi']))
        {
            $marka3 = 'xiaiomi';
            echo(' | Xiaiomi  ');
        }
        else
        {
            $marka3 = 'a';
        }
        if(isset($_POST['Sony']))
        {
            $marka4 = 'sony';
            echo(' | Sony  ');
        }
        else
        {
            $marka4 = 'a';
        }
        echo(" </p> ");
        if(isset($_POST['Samsung']) || isset($_POST['Xiaiomi']) || isset($_POST['Apple']) || isset($_POST['Sony']))
        {
            $sql_notatki = 'SELECT `nazwa`, `marka`, `cena`, `opis`, `image` FROM `telefony` WHERE (telefony.cena BETWEEN '.$min_cena.' AND '.$max_cena.' ) AND (`marka` LIKE "'.$marka2.'" OR `marka` LIKE "'.$marka1.'" OR `marka` LIKE "'.$marka3.'" OR `marka` LIKE "'.$marka4.'") ORDER BY `cena` ASC;';
        }
        else
        {
            $sql_notatki = 'SELECT `nazwa`, `marka`, `cena`, `opis`, `image` FROM `telefony` WHERE telefony.cena BETWEEN '.$min_cena.' AND '.$max_cena.' ORDER BY `cena` ASC;';
        }
        
        
        $notatki = mysqli_query($conn, $sql_notatki);
        $ile = mysqli_num_rows($notatki);
        if($ile == 0)
            {
                echo('<br><br>Brak produktów spełniających kryteria');
            }
for($i=0;$i<=$ile;$i++)
{
    $row = mysqli_fetch_row($notatki);
    if(isset($row[0]))
    {
        echo('<div id="midder1_0">');
        echo('<div>');
        echo('<p>'.$row[0].'</p>');
        echo('<span>'.$row[3].'<p>'.$row[2].'zł</p></span>');
        echo('<button>KUP TERAZ</button>');
        echo('</div>');
        echo('</div>');
    }

}
    }
else
{
$sql_notatki = 'SELECT  `nazwa`, `marka`, `cena`, `opis`  FROM `telefony` ORDER BY `cena` ASC;';
$notatki = mysqli_query($conn, $sql_notatki);
$ile = mysqli_num_rows($notatki);
for($i=0;$i<=$ile;$i++)
{
    $row = mysqli_fetch_row($notatki);
    if(isset($row[0]))
    {
        echo('<div id="midder1_0">');
        echo('<div>');
        echo('<p>'.$row[0].'</p>');
        echo('<span>'.$row[3].'<p>'.$row[2].'zł</p></span>');
        echo('<button>KUP TERAZ</button>');
        echo('</div>');
        echo('</div>');
    }

}   
}
                        
                        
                        
?>
            </div>
        </div>
        <div class="placeholder">.</div>
        <footer>
            <div id="footer_lewy">Stronka stworzona przez:<b>Paweł Czaja</b></div>
            <div id="footer_prawy">Kontakty, Tel: <b>780 006 963</b> Email: <b> Pawel.poiu.czaja@gmail.com</b></div>
        </footer>
    
    </body>

    
        
        
</HTML>