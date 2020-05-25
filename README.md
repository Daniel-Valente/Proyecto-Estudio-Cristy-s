Nombre del proyecto:
    Estudio Cristy's

Objetivo del proyecto:
    Este proyecto es presentado con la finalidad de establecerle a un negocio de fotografía una aplicación web en que sus clientes tengan las posibilidad de ingresar y solicitarle una cita para uno de sus servicio en cuestión.

    Dentro de esta aplicación el cliente tiene la posibilidad de realizar el pago del servicio solicitado, ya sea en abono o el pago completo, además de solicitar una factura de sus pagos en linea, un estado de todos los pedidos, poderse comunicar con el estudio si sucede un inconveniente y si lo desea, compartir con los demás clientes las fotografías que se le ha entregado en versión digital.

    Por otra parte, por medio del los administradores, se le permite modificar los pedidos cuando estos se han completado la cita, estableciendo un día de entrega del pedido y establecerle que se ha pagado al comprobar el historia de los pagos del cliente.

Integrante:
    Daniel Valente.

Instrucciones extra de su uso:
1) Instrucciones para el metodo de pago:
    Se implemento un sistema de pago en el cual se encuentra bajo la página de Stripe, las credenciales presentada para que funcion es bajo la siguiente configuración en el archivo .env

    
    STRIPE_KEY=pk_test_DQbyxrJgAAgKbk6bflU5y0WT00qu65sYeI
    STRIPE_SECRET=sk_test_D1Ycl2wLlkxnGzv7IhKBWMfN00YHnOvkH4

Para el servicio de pago, se establece una tarjeta de debito de prueba para que no tenga que incluirse una real mientra que testea, esos datos son los siguientes.
    
    Número de tarjeta:

    4242 4242 4242 4242

    MES:

    12

    AÑO:

    22

    CVC:

    123

    Código Postal o ZIP:

    92407

2) Instrucciónes para el servicio de correo.
    Para validar los correos, se hace mediante la página mailtrap, los datos que se establecen dentro del archivo .env son los siguientes:
    
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=e8decbf5b4cbe1
    MAIL_PASSWORD=80506e8cfc6a8e
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=Cristy@estudiocristys.com
    MAIL_FROM_NAME="${APP_NAME}"

Para hacer la comprobación de los correos, se utilizo la siguiente cuenta:

    correo:
    
    estudiocristyprogra@gmail.com

    contraseña:

    estudi0Cristy13

La sesión se hace mediante credenciales de tercero con google, con esta cuenta se puede comprobar los correos de verificación, los correos personalizados de los clientes a la administración del estudio y otra opción extra.

3) Task Scheduling
    Se tiene programada que se envie un correo automatico con cuenta con el estado de la página durante cada minuto. Eso se aplica por medio del siguiente comando:

    php artisan registered:users
