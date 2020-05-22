<!DOCTYPE html>
<html>
    <head>
        <title>Mensaje recibido</title>
    </head>
    <body>
        Contenido del email
        <p>
            Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}
        </p>
    </body>
</html>

