<?php
    if (isset($_REQUEST['submit']))
    {
        if (isset($_REQUEST['id_cuentaA'], $_REQUEST['id_cuentaB'], $_REQUEST['monto']))
        {
            include_once('conexion.php');
            $cuentaA = $_REQUEST['id_cuentaA'];
            $c_monto = $_REQUEST['monto'];
            $cuentaB = $_REQUEST['id_cuentaB'];

            $envio = new Conectar();
            $envio -> Reemplazar($cuentaA, $cuentaB, $c_monto);
            $envio -> MandarDatos();
        }
    }
?>