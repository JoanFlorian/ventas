<?php
require_once ("database/conection.php");
$db = new database();
$con = $db->conectar();
            $file =$_FILES['cargar_csv']['tmp_name'];
            $tipo   = $_FILES['cargar_csv']['type'];
            $tamanio= $_FILES['cargar_csv']['size'];
            $lineas = file($file);
            foreach ($lineas as $linea) {
                    $datos = explode(";", $linea);
                    $doc_vendedor   = trim($datos[0] ? $datos[0]:'');
                    $nombre_vendedor   = trim($datos[1] ? $datos[1]: '');
                    $doc_comprador  = trim($datos[2] ? $datos[2]: '');
                    $nombre_comprador  = trim($datos[3] ? $datos[3]: '');
                    $apellido_comprador= trim($datos[4] ? $datos[4]: '');
                    $telefono= trim($datos[5] ? $datos[5]: '');
                    $nombre_material= trim($datos[6] ? $datos[6]: '');
                    $valor_unitario = trim($datos[7] ? $datos[7]: '');
                    $cantidad_vendida  = trim($datos[8] ? $datos[8]: '');

                        $fecha = date("Y-m-d H:i:s");
                        $venta = $con->prepare("INSERT INTO venta(nombre_vendedor,doc_comprador,nombre_comprador, apellido_comprador,telefono,cantidad,fecha,material,precio) VALUES (?,?,?,?,?,?,?,?,?)");
                        $venta->execute([$nombre_vendedor, $doc_comprador, $nombre_comprador, $apellido_comprador,$telefono,$cantidad_vendida,$fecha,$nombre_material,$valor_unitario]);}
     header("Location: datos.php");
            
            

?>
