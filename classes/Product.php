<?php 
    require_once __DIR__ . '/Category.php';

    class Product extends Category {
        public $name;
        public $description;
        public $img;
        public $price;

        function __construct($category_name, $name, $price, $description = '')
        {
            parent::__construct($category_name);
            $this->category_name = $category_name;
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
        }
    } 

    
    
?>