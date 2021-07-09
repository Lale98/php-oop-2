<?php 
    class Client {
        private $name;
        private $surname;
        private $email;
        protected $age;
        protected $sconto = 0;

        function __construct($name, $surname, $age, $email = '')
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
            $this->email = $email;
        }

        public function getSconto() {
            if ($this->age >= 50) {
                $this->sconto += 30;
            }
            return $this->sconto;
        }

    }

?>