<html>

    <body>

        <?php
        $name = "SueldoPoli";
        $host = "localhost";
//$port = "3306";
        $user = "root";
        $pass = "";
        $dbname = "vario_suelpoli";


        $conexion = mysqli_connect($host, $user, $pass, $dbname)
                or die('Error connecting to MySQL server.');

        $base = mysqli_select_db($conexion,$dbname)
                or die('Error Accediendo a la base');


		//PARA ARREGLAR PROBLEMA DEL ENCODING Ñ
		//mysql_set_charset("UTF8", $conexion);                
        ?>

    </body>
</html>