<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include_once ('Shape.php');
    class Circle extends Shape 
    {
        public $radius;

        public function __construct($name,$radius)
            {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function calculateArea(){ 
            return (pi() * pow($this->radius, 2));
        }

        public function calculatePerimeter(){
            return pi() * $this->radius * 2;
        }
    }
    ?>
</body>
</html>