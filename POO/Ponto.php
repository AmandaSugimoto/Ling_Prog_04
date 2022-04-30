<?php
    class Ponto {
        private $x;
        private $y;
        private static $contador

        public function __construct($x, $y)
        {
            $this->setX($x);
            $this->setY($y);
        }

        public function calcularDistancia(Ponto $p){
            $valorX = pow(($p->getX- $this->x), 2);
            $valorY = pow(($p->getY- $this->y), 2);
            return sqrt($valorX + $valorY);
        }

        public function calcularDistancia($x, $y2){
            $valorX2 = pow(($p->getX- $this->x), 2);
            $valorY2 = pow(($p->getY- $this->y), 2);
            return sqrt($valorX + $valorY);
        }

        public static function setContador($contador){
            self::$contador = $contador;
        }

        public static function getContador($contador){
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