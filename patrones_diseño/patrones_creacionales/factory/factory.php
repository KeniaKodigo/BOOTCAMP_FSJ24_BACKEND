<?php

#va ser el elemento que tenga en comun los productos
interface Notification{
    public function send($message);
}

#creamos los productos
class EmailNotification implements Notification{
    public function send($message)
    {
        //proceso de como se enviar un mensaje por via correo
        echo "Enviando Email: $message<br>";
    }
}

class SMSNotification implements Notification{
    public function send($message)
    {
        echo "Enviando SMS: $message<br>";
    }
}

class PushNotification implements Notification{
    public function send($message)
    {
        echo "Enviando Push Notificacion: $message<br>";
    }
}

class Whastapp{

}

//creando la fabrica (super clase)
class NotificationFactory{
    //crear las notificaciones
    public static function createNotification($type) : Notification {
        //crear objetos
        //switch ===
        return match ($type){
            'email' => new EmailNotification(),
            'sms' => new SMSNotification(),
            'push' => new PushNotification(),
            default => throw new Exception("Tipo de notificacion no es soportada para el sistema")
        };
    }
}

//usando la fabrica
try{
    $notification1 = NotificationFactory::createNotification('email');
    $notification1->send("Hola, aplicamos el patron de fabrica");

    $notification2 = NotificationFactory::createNotification('push');
    $notification2->send("Hey, el codigo se rompio");

    $notification3 = NotificationFactory::createNotification('whatsaap');
    $notification3->send("Hola");

}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}