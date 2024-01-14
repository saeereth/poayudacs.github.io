<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <div class="container">
        <form class="form">
            <h2>Escribenos</h2>
            <p>
                Cometa cualquier duda que tengas en este formulario 
            </p>
            <label for="nombre">Escribe tu nombre</label>
            <input type="text" id="nombre" class="box">
            <label for="correo">Escribe tu correo</label>
            <input type="email" id="correo" class="box">
            <label for="mensaje">Escribe tu mensaje</label>
            <textarea class="box" id="mensaje" cols="30" rows="10"></textarea>
            <input type="submit" value="enviar" class="submit">
        </form>

        <div class="info">
            <img src="images/info-1.svg" class="img-1" alt="">
            <div class="location">
                <div class="icons">
                    <img src="images/gps.svg" alt="">
                    <p>MONTERREY</p>
                </div>
                <div class="icons">
                    <img src="images/number.svg" alt="">
                    <p>800 911 2000</p>
                </div>
                <div class="icons">
                    <img src="images/email.svg" alt="">
                    <p>proayudacs@gmail.com</p>
                </div>
            </div>
            <div class="social">
                <img src="images/fa.svg" alt="">
                <img src="images/tw.svg" alt="">
                <img src="images/ins.svg" alt="">
            </div>
        </div>
    </div>
</body>

</html>