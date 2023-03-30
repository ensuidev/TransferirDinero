<?php
class Conectar
{
    public $idCA = 0;
    public $idCB = 0;
    public $montoA_B = 0;

    function Reemplazar($variable1, $variable2, $variable3)
    {
        $this->idCA = $variable1;
        $this->idCB = $variable2;
        $this->montoA_B = $variable3;
    }

    function MandarDatos()
    {
        $servername = "localhost";
        $database   = "cajero";
        $username   = "root";
        $password   = "";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Connected successfully";

        //Obtener Saldo
        $consulta = "SELECT saldo FROM usuarios";
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) 
            {
                $saldo[] = $row['saldo'];
            }
        }

        //Valores
        $saldoA = $saldo[0];
        $saldoB = $saldo[1];
        $montoA_B = $this->montoA_B;

        $idCA = $this->idCA;
        $idCB = $this->idCB;

        if ($montoA_B > $saldoA) 
        {
            echo "<script language='javascript'>
                        alert('El usuario no dispone del saldo ingresado!');
                        </script>";
        } 
        else 
        {
            $totalA = $saldoA - $montoA_B;
            $totalB = $saldoB + $montoA_B;

            //Actualizar BD A
            $sql = "UPDATE usuarios SET saldo='$totalA' WHERE idusuario='$idCA';";

            if (mysqli_query($conn, $sql)) 
            {
                //Actualizar BD B
                $sql = "UPDATE usuarios SET saldo='$totalB' WHERE idusuario='$idCB';";

                if (mysqli_query($conn, $sql)) 
                {
                    echo "<script language='javascript'>
                         alert('La transferencia se realizo exitosamente!');
                         </script>";
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        //Cierre
        mysqli_close($conn);
    }
}
