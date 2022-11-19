<nav>
    <div class="menu-container">
        <a href="index.php">
            <img src="img/logo.svg" alt="logo" />
        </a>
        <button class="menu" onclick="toggleLinks()">
            <?php
            include "views/components/svg/menu.php";
            ?>
        </button>
    </div>

    <ul id="links">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="index.php?action=2022">2022</a></li>
        <li><a href="index.php?action=pilotos">Pilotos</a></li>
        <li><a href="index.php?action=autos">Autos</a></li>
        <li><a href="index.php?action=contacto">Contacto</a></li>
    </ul>
</nav>