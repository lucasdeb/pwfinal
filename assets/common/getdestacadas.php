<?php
include('config.php');

//Un arreglo de todas las imagenes o arte de la base de datos y devuelve los mas recientes

$sql = "SELECT Id_Arte, User_Id, img_arte, precio, Privado, alias_arte FROM Arte";

$result = mysqli_query($link, $sql);

function destacadas($result)
{
    $dest = array();
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['Privado'] == 0) {
            if ($_SESSION['User_Id'] != $row['User_Id']) {
                $compra = '<a href="../common/payment.php?id_exac=' . $row["Id_Arte"] . '">Comprar</a>';
            } else {
                $compra = '';
            }
            $cont = '<div class="colecciones-destacada-1">
                    <img src="../imgs/icons/fire.svg" alt="" class="iconos" style="width: 20px;"><label for="">Ultimo</label>
                    <div class="medio">
                        <div class="izquierda">
                            <h1>' . $row["alias_arte"] . '</h1>
                        </div>
                        <img src="' . $row["img_arte"] . '" alt="">
                        <h3>Precio: $' . $row["precio"] . '</h3>
                        ' . $compra . '
                    </div>
                    </div>';
            array_push($dest, $cont);
        }
    }
    //rsort($dest, 1); El 1 es para que se ordene por valores numericos
    return array_reverse($dest);
}

mysqli_close($link);

?>