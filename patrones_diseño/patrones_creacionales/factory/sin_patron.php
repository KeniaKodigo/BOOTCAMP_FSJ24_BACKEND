<?php

/**
 * toda la logica esta en la misma clase
 * datos quemados
 * open closed
 * 
 * enviar un mensaje (compartir el mismo metodo, accion)
 */
class NotificationService {
    public function sendNotification($type, $message) {
        if ($type === 'email') {
            echo "Enviando Email: $message<br>";
        } elseif ($type === 'sms') {
            echo "Enviando SMS: $message<br>";
        } elseif ($type === 'push') {
            echo "Enviando Push Notification: $message<br>";
        } else {
            echo "Tipo de notificación no soportado.<br>";
        }
    }
}

/** Una notificación por push es un mensaje que se envía directamente a un 
 * dispositivo (como un smartphone, tableta o computadora) a través de una aplicación
 *  o un navegador web */

// Uso
$service = new NotificationService();
$service->sendNotification('email', '¡Hola, tienes un nuevo mensaje!');
$service->sendNotification('sms', '¡Tu pedido ha sido enviado!');