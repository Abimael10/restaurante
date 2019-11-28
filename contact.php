
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aviso</title>
    <link rel="stylesheet" href="./css/aviso.css">
</head>
<body>
    
<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = 'juanabimael@gmail.com';
    $header = 'De: '.$mailFrom.'.';
    $txt = 'Has recibido un mensaje de: '.$name.'\n\n'.$message;

    mail($mailTo, $mailFrom, $txt, $header);
}

?>

    <div id="particles-js">
        <div class="aviso">
            <div class="container">
                <p>Mensaje Enviado! Muchas Gracias Por Ponerte En Contacto Con Nosotros.</p>
                <a href="index.php">Página Anterior</a>
            </div>
        </div>
    </div>

    <!--Particles JS-->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        particlesJS.load('particles-js', 'particles.json', function() {
        console.log('particles.json loaded...');
        });
    </script>
</body>
</html>