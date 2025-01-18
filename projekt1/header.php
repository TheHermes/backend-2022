<header>
    <!-- Logo och meny i headern -->
    <a href="https://www.php.net/manual/en/" target="_blank"><img id="phpLogo" src="/~heikkihe/Backend/projekt1-victorhermes/media/php-logo-black.svg" alt="Website logo" /></a>
    <div id="logo">PH - Projekt</div>

    <nav>
        <!-- Huvudmenyn -->
        <ul>
            <li><a href="/~heikkihe/Backend/projekt1-victorhermes/">Home</a></li>

            <?php
            // Hälsar på återkommande användare 
            if (isset($_SESSION['username']))  {
                echo "<li><a href='/~heikkihe/Backend/projekt1-victorhermes/projekt1/profile.php'>" . $_SESSION['username'] . " Profile</a></li>";
            }?>

            <?php if (isset($_SESSION['username']))  {?>
            <li class="drop">
                <a>Projekt</a>
                <ul class="dropdown">
                    <li><a href="/~heikkihe/Backend/projekt1-victorhermes/projekt1/">Projekt 1</a></li>
                    <li><a href="/~heikkihe/Backend/projekt1-victorhermes/projekt2/">Projekt 2</a></li>
                </ul>
            </li>
            <?php }?>

            <li class="drop">
                <a>Rapport</a>
                <ul class="dropdown">
                    <li><a href="/~heikkihe/Backend/projekt1-victorhermes/rapport/hermesrapport.php">Hermes Rapport</a></li>
                    <li><a href="/~heikkihe/Backend/projekt1-victorhermes/rapport/victorrapport.php">Victor Rapport</a></li>
                </ul>
            </li>
            <!--<li><a href="../projekt1/">Projekt 1</a></li>-->
            <!--<li><a href="../projekt2/">Projekt 2</a></li>-->
            <!--<li><a href="../rapport/rapport.php">Rapport</a></li>-->
        </ul>
    </nav>
</header>