<?php 
    class Log {
        private static $instance;

        public static function getInstacnce() {
            if(self::$instance == null) {
                self::$instance = new self;
            }
            return self::$instance;
        }
    }

    $log = Log::getInstacnce();
    $log2 = Log::getInstacnce();
    $log3 = Log::getInstacnce();
    $log4 = Log::getInstacnce();
    $log5 = Log::getInstacnce();

    var_dump($log);
    var_dump($log2);
    var_dump($log3);
    var_dump($log4);
    var_dump($log5);

?>