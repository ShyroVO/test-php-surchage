<?php
require './classes/User.php';
require './classes/Admin.php';

$user = new User('MachinChose');
echo $user->generateCode();

echo "<br><br>";

$admin = new Admin('Truc');
echo $admin->generateCode();

$admin->display();
echo $admin;