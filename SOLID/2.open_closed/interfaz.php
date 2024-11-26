<?php

interface NivelCurso{
    public function getDuration();
}

/**
 * titulo
 * duracion
 * temario
 * descripcion
 */

class CursoBasico implements NivelCurso{

    public function getDuration()
    {
        return 30;
    }
}

class CursoIntermedio implements NivelCurso{

    public function getDuration()
    {
        return 45;
    }
}

class CursoAvanzado implements NivelCurso{

    public function getDuration()
    {
        return 60;
    }
}