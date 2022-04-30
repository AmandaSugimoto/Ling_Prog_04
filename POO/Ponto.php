<?php
    class Ponto {
        private $x;
        private $y;
        private static $contador = 0;

        public function __construct($x, $y)
        {
            $this->setX($x);
            $this->setY($y);
            self::getContador();
        }

        public function calcularDistancia(Ponto $p){
            $valorX = pow(($p->getX- $this->x), 2);
            $valorY = pow(($p->getY- $this->y), 2);
            return sqrt($valorX + $valorY);
        }

        public function calcularDistancia2($x2, $y2){
            $valorX = pow(($x2->getX- $this->x), 2);
            $valorY = pow(($y2->getY- $this->y), 2);
            return sqrt($valorX + $valorY);
        }

        public function calcularDistancia3($x1, $x2, $y1, $y2){
            $valorX = pow(($x2 - $x1), 2);
            $valorY = pow(($y2 - $y1), 2);
            return sqrt($valorX + $valorY);
        }

        public static function setContador($contador){
            self::$contador = $contador;
        }

        public static function getContador(){
            return self::$contador;
        }

        public function getX(){
            return $this->x;
        }

        public function setX(){
            return $this->x;
        }

        public function getY(){
            return $this->y;
        }

        public function setY(){
            return $this->y;
        }
    }
#$this para propriedades que irão ser manipulador dentro do objeto (não estáticos)
#self:: para propriedades e métodos static