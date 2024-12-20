<head>
    <link rel="stylesheet" href="../CSS/nav.css">
</head>
<div class="custom-navbar">
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <div class="navbar">

        <div class="navbar-left">
            <div><img src="../images/logo.png" alt=""></div>
            <div class="des-menu">

            <?php
            ?>
                <a href="../views/main.php">Restaurantes</a>
                <a href="../views/chat.php">Chat</a>
                <a href="../views/contacto.php">Contacto</a>
            </div>
        </div>


        <div class="navbar-right">
            <div class="btn-cerrar-sesion">
                <a href="../../login.php">Cerrar sesión</a>
            </div>
            <div class="icon-div">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                    <path
                        d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z">
                    </path>
                </svg>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleMenu() {
        const navbarContainer = document.querySelector('.custom-navbar');
        navbarContainer.classList.toggle('show-menu');
    }
</script>