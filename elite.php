<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Actividad 4</title>
	<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
	<metaname="viewport"content="width=device-width, initial-scale="1.0">
</head>

<body>   
   <main>
    <section>
        <article>
            <header>
                <h1>
                    Entraste en el ranking </br> de los putos amos del juego. </br>
                    Introduce tu nombre para </br> la posteridad:
                </h1>
           </header>
            <form action="funcionesServidor/introducir.php" method="post"  >
                <input type="text" name="user" placeholder="Como te haces llamar?"/>
             <input type="submit" id="introRanking" value="Introducir usuario, y ver mi lugar"/>
            </form>     
    </article>
    </section>
    
    <section>
    <div class="puntuacion">
        <?php

            echo "<label for='esquivadas'><b>Cuantas esquivaste: </b></label>
            <input id='esquivadas' value=".$_COOKIE["puntuacionFinal"]." readonly/>";

        ?>
        
    </div>
    </section>
</main> 
        
    
</body>

</html>