<?php

require_once "./student.php";

class PaymentManager{

    public static $amount;

    public static function registerPayment(Students $student, float $amount) {
        //code..
    }

    public static function test(){}

    public function getPayments() {
        //code..
    }
}

//instacia = crear un objeto
$juan = new Students("Juan","juan@example.com","JG2024");
$ivan = new Students("Ivan","ivan@gamil.com","if2024");
// $payment = new PaymentManager(); //juan
// $payment2 = new PaymentManager(); //ivan
//Aplicando un metodo estatico
PaymentManager::registerPayment($juan, 90.50);
PaymentManager::registerPayment($ivan, 103.10);

//$payment->getPayments();
