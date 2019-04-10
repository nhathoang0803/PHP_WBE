<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h3>Giải phương trình bậc 2 ax <sup>2</sup> + bx + c = 0</h3>
        Nhập các hệ số :
        a = <input type="text" name="a" size="5">
        b = <input type="text" name="b" size="5">
        c = <input type="text" name="c" size="5">
        <input type="submit" name="giai" value=" Giải phương trình">
    </form><br><br>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        class phuongtrinhbac2 {
            protected $a=1;
            protected $b=3;
            protected $c=2;
            private function delta()
            {
                return pow($this->b,2) - 4 * $this-> a * $this->c;
            }
            protected function giai()
            {
                if($this->delta() <0)
                    echo "Phương trình vô nghiệm";
                else if ($this->delta == 0) 
                    echo "Phương trình có nghiệm kép: x<sub>1</sub> = x<sub>2</sub> = ".-$this->b/(2*$this->a);
                    else{
                        $x1 = (-$this->b-sqrt($this->delta()))/(2*$this->a);
                        $x2 = (-$this->b+sqrt($this->delta()))/(2*$this->a);
                        echo "Phương trình có 2 nghiệm phân biệt: &emsp;";
                        echo "x<sub>1</sub> = $x1 &emsp;x<sub>2</sub> = $x2";
                    }
                }
            }
            class phuongtrinh extends phuongtrinhbac2
            {
                public function gpt()
                {
                    return $this->giai();
                }
                public function seta($_a)
                {
                    return $this->a = $_a;
                }
                public function setb($_b)
                {
                    return $this->b = $_b;
                }
                public function setc($_c)
                {
                    return $this->c = $_c;
                }
            }
            $g = new phuongtrinh;
            if(isset($_POST['giai'])){
                $g->seta($_POST['a']);
                $g->setb($_POST['b']);
                $g->setc($_POST['c']);
                $g->gpt();
            }
        }
         ?>
    </body>
    </html>