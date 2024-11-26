<?php

class Teacher {
    public function assignTime($schedule) {
        // code..
    }
}

class GuestTeacher extends Teacher {

    public function assignSchedule($schedule) {
        throw new Exception("Los profesores invitados no tienen horarios fijos.");
    }
}