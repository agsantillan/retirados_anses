<?php
session_start();
?>
<html>
    <head>
    <!-- este es un ejemplo de comentario -->
        <link rel="icon" type="image/png" href="escudo.png" />
        <title>Sueldopoli</title>

        <style>
      
 img.animated-gif{
  width: 70%;
  height: auto;
}


      </style>        

    </head>
    <body>

        <div class="container">    
            <table align="center">
                <tr>
                    <td>
                        <img class="img-responsive" src="imagen.jpg"/>
                    </td>                 
                </tr>
            </table>
            <br>


            <?php
            include 'menu.php';
            ?>

            <div>
                <table>
                    <tr align="center">
                        <td>                
                             <img class="animated-gif" src="migif.gif">
                        </td>                 
                    </tr>
                </table>                
            </<div>
                    <form action="consultar_dni1.php" method="post">
                        <table class="table" align="center">
                            <tr align="center">
                                <td>
                                    <input class="btn btn-primary" type="submit" value="CONSULTAR POR DNI">
                                </td>
                            </tr>
                        </table>
                    </form>                 
   </div>



  
        </div>

    </body>
</html>