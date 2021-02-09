<?php
require './classes/User.php';
require './classes/Admin.php';

$user = new User('MachinChose');
echo $user->generateCode();

echo "<br><br>";

$admin1 = new Admin('Truc');
$admin2 = new Admin('Poop');

echo Admin::getInstanceCount();