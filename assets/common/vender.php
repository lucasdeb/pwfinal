<?php

include('config.php');
include('perfil.php');

$contenido = <<<html
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../styles/index.css">
            <link rel="icon" type="image/x-icon" href="/assets/imgs/misc/favicon.ico">
            <script src="../scripts/app.js"></script>
            <title>Inicio</title>
        </head>

        <body>
            <div class="container-usermain">

                <!-- sidebar -->

                <aside>
                    <div class="arriba">
                        <div class="logo-usermain">
                            <img src="../imgs/misc/logo.jpeg" alt="">
                            <h2>marketplace</h2>
                            <div class="btn-cerrar">
                                <img src="../imgs/icons/xmark.svg" alt="" class="iconos">
                            </div>
                        </div>
                    </div>

                    <div class="sidebar">

                        <a href="./usermain.php">
                            <img src="../imgs/icons/shop.svg" alt="" class="iconos" style="width: 20px;">
                            <h3>Mercado</h3>
                        </a>

                        <a href="./vender.php" class="activo">
                            <img src="../imgs/icons/cash-register.svg" alt="" class="iconos" style="width: 20px;">
                            <h3>Vender</h3>
                        </a>

                        <a href="./subir.php">
                            <img src="../imgs/icons/upload.svg" alt="" class="iconos" style="width: 20px;">
                            <h3>Subir</h3>
                        </a>

                        <a href="./analisis.php">
                            <img src="../imgs/icons/magnifying-glass-chart.svg" alt="" class="iconos" style="width: 20px;">
                            <h3>Analisis</h3>
                        </a>
                        
                        <!--<a href="./carrito.php">
                            <img src="../imgs/components/basket-cart-icon-27.png" style="width:20px;height: 20px;">
                            <h3>Carrito</h3>
                            <span class="cant-productos">3</span>
                        </a>-->

                        <a href="../../index.php">
                            <img src="../imgs/icons/right-from-bracket.svg" alt="" class="iconos" style="width: 20px;">
                            <h3>Cerrar Sesión</h3>
                        </a>

                    </div>
                </aside>

                <!-- pantalla principal -->

                <main>
                    <h1>Vender</h1>


                    <h2>Tu inventario publico <img src="../imgs/icons/unlock.svg" alt="" class="iconos" style="width: 20px; float: left;"></h2>
                    <div class="inventario-usario">

                        <div id="inventario">
                            <h1>MAYC #39</h1>
                            <a href="#"><img src="../imgs/nft-art/39.jpeg" alt=""></a>
                            <h3>Comprado: 08/22</h3>
                            <h3>Precio piso: 14.6 ETH</h3>
                            <button class="ver-perfil" onclick="abrir()">Editar</button>
                            <a href="./art/01.html" class="visitar-perfil"><button class="ver-perfil">Ver mas</button></a>
                        </div>

                        <div id="inventario">
                            <h1>Doodles #142</h1>
                            <a href="#"><img src="../imgs/nft-art/32.jpeg" alt=""></a>
                            <h3>Comprado: 08/22</h3>
                            <h3>Precio piso: 14.6 ETH</h3>
                            <button class="ver-perfil" onclick="abrir()">Editar</button>
                            <a href="./art/00.html" class="visitar-perfil"><button class="ver-perfil">Ver mas</button></a>
                        </div>
                    </div>
                    <br>
                    <div class="editar-arte" id="editar-arte">
                        <form action="#" class="editar-arte-formulario">
                        <h1>Editar</h1>
                    
                        <label for="precio"><b>Precio: </b></label>
                        <input type="number" placeholder="Editar Precio" name="precio" min="0" step="0.1">
                        
                        <input type="checkbox" id="privado" name="Privado" value="1">
                        <label for="privado">Privado: </label>
                    
                        <button type="submit">Aceptar</button>
                        <button type="button" onclick="cerrar()">Cancelar</button>
                        </form>
                    </div>
                    <br>
                    <!-- <h2>Tu inventario privado <i class="fa-solid fa-lock"></i></h2>
                    <div class="inventario-usuario">

                        <div id="inventario" class="privado">
                            <h1>MutantApeYachtClub #39</h1>
                            <a href="#"><img src="../imgs/nft-art/39.jpeg" alt=""></a>
                            <h3>Comprado: 08/22</h3>
                            <h3>Precio piso: 14.6 ETH</h3>
                            <a href="#" class="visitar-perfil"><button class="ver-perfil">Ver mas</button></a>
                        </div>

                        <div id="inventario" class="privado">
                            <h1>Doodles #142</h1>
                            <a href="#"><img src="../imgs/nft-art/32.jpeg" alt=""></a>
                            <h3>Comprado: 08/22</h3>
                            <h3>Precio piso: 14.6 ETH</h3>
                            <a href="#" class="visitar-perfil"><button class="ver-perfil">Ver mas</button></a>
                        </div>
                    </div> -->

                    <h2>Administrar inventario</h2>

                    <div class="top-colecciones">
                        <table>
                            <thead>
                                <tr>
                                    <th>Coleccion</th>
                                    <th>ID</th>
                                    <th>Privado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>MutantApeYachtClub</td>
                                    <td>39</td>
                                    <td><input type="checkbox" name="privado" id="check-priv-pub"></td>
                                    <td><input type="submit" value="Guardar"><img src="../imgs/icons/floppy-disk.svg" alt="" class="iconos" style="height: 20px; width: 20px; float: left; padding: 0;"></td>
                                    <!-- <td><a href="#">Ver</a></td> -->
                                </tr>

                            </tbody>
                        </table>


                </main>

                <!-- panel derecha -->

                <div class="derecha">



                    <div class="arriba">
                        <button id="btn-menu">
                            <img src="../imgs/icons/bars.svg" alt="" class="iconos">
                        </button>

                        <div class="perfil">
                            <div class="informacion">
                                <p>Hola, <b>{$username}</b></p>
                                <small class="texto">{$nivel}</small>
                            </div>
                        </div>
                    </div>

                    <!-- 
                    <div class="vendedores">
                        <h2>Vendedores Destacados</h2>
                        <div class="vendedores-destacados">

                            <div class="vendedor-dest">
                                <div class="foto-perfil">
                                    <img src="../imgs/perfiles/perfil2.jpeg">
                                </div>
                                <div class="msj">
                                    <a href="/">
                                        <p>Elon Musk</p>
                                    </a>
                                    <small>73 ventas</small>
                                </div>
                            </div>

                            <div class="vendedor-dest">
                                <div class="foto-perfil">
                                    <img src="../imgs/perfiles/perfil3.jpeg">
                                </div>
                                <div class="msj">

                                    <a href="/">
                                        <p>Marcos Galperin</p>
                                    </a>
                                    <small>49 ventas</small>
                                </div>
                            </div>

                            <div class="vendedor-dest">
                                <div class="foto-perfil">
                                    <img src="../imgs/perfiles/perfil4.jpeg">
                                </div>
                                <div class="msj">
                                    <a href="/">
                                        <p>Harold Stock</p>
                                    </a>
                                    <small>32 ventas</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->

                </div>
        </body>

        </html>

html;

echo $contenido;

?>