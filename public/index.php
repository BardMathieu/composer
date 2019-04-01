<?php
require_once __DIR__ . '/../vendor/autoload.php';
use HelloWorld\SayHello;
use Wcs\Hello;
echo SayHello::world()."<br>";
echo Hello::talk();