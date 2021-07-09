<?php 
    require_once __DIR__ . '/Client.php';

    class Premium extends Client {
        public $sconto =  +10;

        public function getSconto() {
            return $this->sconto;
        }
    }


?>