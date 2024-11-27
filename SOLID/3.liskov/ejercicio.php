<?php

class Teacher {
    public function assignSchedule($schedule) {
        // code..
    }

    public function material_clase($material, $clase){

    }
}

class GuestTeacher extends Teacher {

    //surgen las excepciones
    public function assignSchedule($schedule) {
        throw new Exception("Los profesores invitados no tienen horarios fijos.");
    }
}

$profesor_invitado = new GuestTeacher();
echo $profesor_invitado->assignSchedule("Lunes a miercoles de 8am - 1pm");
$profesor_invitado->material_clase();