<?php

//assert(true);
//assert(false);

//namespace src;

require_once 'vendor/autoload.php';

use App\One\Test1;
use App\Two\Test2;
use App\Three\Four\Test3;

$obj1 = new Test1();
$obj2 = new Test2();
$obj3 = new Test3();

$obj1 -> do();
$obj2 -> do();
$obj3 -> do();