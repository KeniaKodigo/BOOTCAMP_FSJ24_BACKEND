<?php

interface AcademicManagement {
    public function registerStudent();
    public function assignProfessor();
}

interface Payments{
    public function registerPayment();
}

class Course implements AcademicManagement {
    public function registerStudent() {
        // Código para inscribir estudiante
    }

    public function assignProfessor() {
        // Código para asignar profesor
    }
}

class Paypall implements Payments{
    public function registerPayment(){
        //code..
    }
}