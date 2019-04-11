<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectangle</title>
</head>
<body>
    <?php
    include_once ('Shape.php');
    class Rectangle extends Shape{
     public $width;
     public $height;
    
     public function __construct($name, $width, $height)
     {
         parent::__construct($name);
         $this->width = $width;
         $this->height = $height;
     }
    
     public function calculateArea(){
          return $this->height * $this->width;
     }
    
     public function calculatePerimeter(){
          return ($this->height + $this->width) * 2;
     }
    }
    ?>
</body>
</html>