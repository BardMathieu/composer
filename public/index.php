<?php
require'../vendor/autoload.php';
$hello = new App\Wcs\Hello();
echo $hello->talk()."<br>";
$helloWorld = new HelloWorld\SayHello();
echo $helloWorld->world();
