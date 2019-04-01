<?php
require'../vendor/autoload.php';
$hello = new App\Wcs\Hello();
echo $hello->talk();
echo "<br>";
$helloWorld = new HelloWorld\SayHello();
echo $helloWorld->world();
