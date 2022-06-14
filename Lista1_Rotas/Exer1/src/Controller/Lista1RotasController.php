<?php

namespace Aluno\Aula0405\Controller;

class Lista1RotasController
{
    public static function exibir(){
        require_once("../src/View/exer1.php");
    }

    public static function exibirResultado(){
        require_once("../src/View/Resultado1.php");
    }
}