<h1> Nombre del proyecto:</h1>
    <h2> Estudio Cristy's </h2> 

<h1> Objetivo del proyecto: </h1> <br>
    Este proyecto es presentado con la finalidad de establecerle a un negocio de fotografía una aplicación web en que sus clientes tengan las posibilidad de ingresar y solicitarle una cita para uno de sus servicio en cuestión.

    Dentro de esta aplicación el cliente tiene la posibilidad de realizar el pago del servicio solicitado, 
    ya sea en abono o el pago completo, además de solicitar una factura de sus pagos en linea, un estado 
    de todos los pedidos, poderse comunicar con el estudio si sucede un inconveniente y si lo desea, 
    compartir con los demás clientes las fotografías que se le ha entregado en versión digital.

    Por otra parte, por medio del los administradores, se le permite modificar los pedidos cuando estos se 
    han completado la cita, estableciendo un día de entrega del pedido y establecerle que se ha pagado al 
    comprobar el historia de los pagos del cliente.

<h1> Integrante: </h1>
    <h2> Daniel Valente. </h2> <br>

<h1> Instrucciones extra de su uso: </h1> <br>
<h2> 1) Instrucciones para el metodo de pago: </h2> <br>
    Se implemento un sistema de pago en el cual se encuentra bajo la página de Stripe, se necesita establecer las credenciales en el archivo .env

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

<h2> 3) Task Scheduling </h2>
    Se tiene programada que se envie un correo automatico con cuenta con el estado de la página durante cada minuto. Eso se aplica por medio del siguiente comando:

    php artisan registered:users
