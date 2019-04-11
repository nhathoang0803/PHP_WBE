<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sape</title>
</head>
<body>
    <?php
        class Shape {
            public $name;

            public function __construct($name)
            {
                $this->name = $name;
            }

            public function show(){
                return "I am a shape. My name is $this->name";
            }
        }
    ?>
</body>
</html>