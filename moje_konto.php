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
        <p class="title">MOJE KONTO</p>
        <div class="placeholder2"></div>
        <div id="moje_konto_midder">
            <div id="mk_midder0">
                <span>
                    <h3>login:</h3><h2>
                    <?php
                    if(isset($_COOKIE['login']))
                    {
                        echo($_COOKIE['login']);
                    }
                    else
                    {
                        echo("Niezalogowano*");
                    }
                    
                    ?></h2>
                </span>
            </div>
            <div id="mk_midder1">
                <h1>Zakupione przedmioty:</h1>
            </div>
            <div id="mk_midder2">
            </div>
        </div>
        <footer>
            <div id="footer_lewy">Stronka stworzona przez:<b>Paweł Czaja</b></div>
            <div id="footer_prawy">Kontakty, Tel: <b>780 006 963</b> Email: <b> Pawel.poiu.czaja@gmail.com</b></div>
        </footer>
    
    </body>

    
        
        
</HTML>