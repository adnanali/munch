<?php

include_once '../application/global.php';


$user = Doctrine::getTable('User')->find(1);

//var_dump ($user);

echo $user->password;

?>