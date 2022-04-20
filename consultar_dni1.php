

    <html>
        <head>
                    <link rel="icon" type="image/png" href="escudo.png" />
                    <title>Sueldopoli</title>
            
        </head>
        <body>
            <div class="container">
                <table align="center"><tr><td><img class="img-responsive" src="imagen.jpg"/></td></tr></table>
                <br>
                <?php
                include 'conexion.php';
                include 'menu.php';
                ?>

                <br>
                <form action="consultar_dni2.php" method="post">
                    <table class="table" align="center">
                        <tr align="center">
                            <td <td align="right" width="50%">
                                <div class="form-group">
                                    <label>INGRESE EL DNI DE LA PERSONA SIN PUNTOS</label>
                                    <input type="text" name="dni">            
                                </div>
                            </td>
                            <td align="left" width="50%">
                                <input class="btn btn-primary" type="submit" value="Buscar">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </body>
    </html>

