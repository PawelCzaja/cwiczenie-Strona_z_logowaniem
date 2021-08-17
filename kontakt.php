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
                    <li><a href="zdjecia.php">Galeria</a>
                        <ul>
                            <li><a href="zdjecia.php">Zdjęcia</a></li>
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
        <p class="title">KONTAKT</p>
        <div class="placeholder2"></div>
        <div id="kon_midder">
            <div id="kon_midder0">
                <h1>TEL</h1><br>
                <p>780 006 963</p><br>
                <h2>Zawsze do twojej dyspozycji!</h2>
            </div>
            <div id="kon_midder1">
                <h1>EMAIL</h1><br>
                <p>Pawel.poiu.czaja@gmail.com</p><br>
                <h2>Napisz do nas, chętnie odpiszemy!</h2>
            </div>
            <div id="kon_midder2">
                <h1>ADRESS</h1>
                <p>3661 Stockert Hollow Road</p>
                <p>Washington</p>
                <p>98021</p><br>
                <h2>Oto nasz oficjalny adres!</h2>
            </div>
        </div>
        <div class="placeholder">.</div>
        <footer>
            <div id="footer_lewy">Stronka stworzona przez:<b>Paweł Czaja</b></div>
            <div id="footer_prawy">Kontakty, Tel: <b>780 006 963</b> Email: <b> Pawel.poiu.czaja@gmail.com</b></div>
        </footer>
    
    </body>

    
        
        
</HTML>