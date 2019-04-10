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
        class StopWatch {
            private static $batDau = array();
            public static function start($ten = 'default') {
                self::$batDau[$ten] = microtime(true);
            }
            public static function time($ten = 'default') {
                return microtime(true) - self::$batDau[$ten];
            }
        }
        StopWatch::start();
        sleep(0.0001);
        echo 'Thời gian đã trôi qua: ' . StopWatch::time() . ' seconds';
    ?>
</body>
</html>