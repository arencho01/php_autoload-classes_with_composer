<?php
    namespace App\One;

    class Test1
    {
        public function do()
        {
            echo "Hello from class 'Test1'<br>";
            return __CLASS__ . ':' . __FILE__;
        }
    }