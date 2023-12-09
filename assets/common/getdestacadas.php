<?php
include('config.php');

//Un arreglo de todas las imagenes o arte de la base de datos y devuelve los mas recientes

$sql = "SELECT Id_Arte, User_Id, img_arte, precio FROM Arte";

$result = $link->query($sql);

function destacadas($result)
{
    $dest = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $cont = '<div class="colecciones-destacada-1">
                <img src="../imgs/icons/fire.svg" alt="" class="iconos" style="width: 20px;"><label for="">Destacada</label>
                <div class="medio">
                    <div class="izquierda">
                        <h1>ID: ' . $row["Id_Arte"] . '</h1>
                    </div>
                    <img src="' . $row["img_arte"] . '" alt="">
                    <h3>Precio: $' . $row["precio"] . '</h3>
                    <a href="../common/payment.php?id_exac=' . $row["Id_Arte"] . '">Comprar</a>
                </div>
            </div>';
        array_push($dest, $cont);
    }
    rsort($dest, 1);
    return array_reverse($dest);
}

mysqli_close($link);

?>