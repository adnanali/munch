<?php

include_once '../application/global.php';


$user = Doctrine::getTable('User')->find(1);

//var_dump ($user);

echo $user->password;

$auth = new Core_Auth_Adapter('adnan.ali@gmail.com', 'turkey11');

if ($auth->authenticate()->isValid()) {
	echo "YES!";
}

?>