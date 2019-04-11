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
    include_once ('Circle.php');
    class Cylinder extends Circle {
        public $height;

        public function __construct($name,$radius,$height)
        {
            parent::__construct($name,$radius);
            $this->height = $height;
        }

        public function caculateArea()
        {
            return parent::caculateArea() * 2 + parent::caculatePerimeter() * $this->height;
        }

        public function caculateVolume(){
            return parent::caculateArea() * $this->height;
        }
    }
    ?>
</body>
</html>