<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="../../css/indexStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
</head>

<body>
    <div class="parent">
        <div class="header">
            <div class="topheader">
                <img class="logo" src="../../img/assets/MundoJurasico.png" alt="">
                <div class="searchbar">
                    <input type="text" name="searchbar" id="searchbar" placeholder="Search">
                    <img src="../../img/assets/buscar.png" alt="">
                </div>
                <div class="perfil">
                    <img class="usuario" src="../../img/assets/lucide--user-round.png" alt="usuario">
                    <ul>
                        <li><a href="#jp1">Mi Perfil</a></li>
                        <li><a href="#jp2">Cerrar Sesión</a></li>
                    </ul>
                </div>

                <img class="compra" src="../../img/assets/compra.png" alt="compra">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#ofertas">Ofertas</a></li>
                    <li><a href="#jurassic-park">Jurassic Park</a>
                        <ul>
                            <li><a href="#jp1">Jurassic Park</a></li>
                            <li><a href="#jp2">Jurassic Park: The Lost World</a></li>
                            <li><a href="#jp3">Jurassic Park III</a></li>
                        </ul>
                    </li>
                    <li><a href="#walking-with">Walking With</a>
                        <ul>
                            <li><a href="#WWM">Walking With Monsters</a></li>
                            <li><a href="#WWD">Walking With Dinosaurs</a></li>
                            <li><a href="#WWB">Walking With Beast</a></li>
                        </ul>
                    </li>
                    <li><a href="#dinosaur-revolution">Dinosaur Revolution</a></li>
                    <li><a href="#mas-especies">Más especies</a>
                        <ul>
                            <li><a href="#triasico">Triasico</a></li>
                            <li><a href="#jurasico">Jurasico</a></li>
                            <li><a href="#cretacico">Cretacico</a></li>
                        </ul>
                    </li>
                    <li><a href="#tienda-fisica">Tienda Física</a></li>
                </ul>
            </div>
        </div>
        <div class="body">
            <div class="categoria">
                <h2>NOVEDADES</h2>
                <div class="carrusel" id="novedadescarrusel">
                    <img class="left" src="../../img/assets/ic--round-play-arrow.png" alt="">
                    <div class="productos" id="novedades">
                        <div class="producto">
                            <a href="./producto.php">
                                <img src="../../img/productos/rexypop.png" alt="">
                                <div class="info">
                                    <p class="titulo">Funko POP Rexy</p>
                                    <p class="precio">15.00€</p>
                                    <div class="comprar">
                                        <input type="text" id="cantidad" value="1">
                                        <button>COMPRAR</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <img class="right" src="../../img/assets/ic--round-play-arrow.png" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>