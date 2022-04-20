
    <html>
        <head>
                    <link rel="icon" type="image/png" href="escudo.png" />
                    <title>Sueldopoli</title>
            
        </head>
        <body>
            <div class="container">
                <table align="center"><tr><td><img class="img-responsive" src="imagen.jpg"/></td></tr></table>
                <br>
                <?php include 'menu.php'; ?>

                <?php
                $dni = $_REQUEST['dni'];

                include 'conexion.php';

                $query = "select * from retirados_anses_personas where dni ='$dni'";
                $resultado = mysqli_query($conexion,$query) or die('Error ejecuando consulta en database.');
                $cant_filas = mysqli_num_rows($resultado);
                ?>
                <table class="table table-striped" align="center">
                    <tr class="info">
                        <td align="center"><label>ID</label></td>
                        <td align="center" ><label>NOMBRE</label></td>
                        <td align="center"><label>DNI</label></td>
                        <td align="center"><label>BENEFICIO</label></td>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_array($resultado)) {

                        echo '<tr align="center"><td >' . $row['id'] . '</td>' . '<td >' . $row['nombre'] . '</td>' . '<td >' . $row['dni'] . '</td>' . '<td >' . $row['tipo'] . '</td>' . '
                        </tr>';
                    }
                    if ($cant_filas>0){
                    ?>
                    <table class="table" align="center">
                        <tr align="center" class="info">
                                <td><h2>A partir del Martes 21/Dic, estara acreditado el Complemento del Bono Diciembre 2021 - ($6000), por Banco Rioja en cualquiera de sus sucursales. Debiendo concurrir unicamente el titular con DNI!</h2></td>                        
                        </tr>
                    </table>
                    <?php
                    }
                    else
                    {   
                    ?>    
                    <table class="table" align="center">
                        <tr align="center" class="info">
                                <td><h2>El DNI no fue encontrado o esta mal escrito!</h2></td>                        
                        </tr>
                    </table>                        
                    <?php
                    }
                    ?>
                </table>
            </div>
        </body>
    </html>
