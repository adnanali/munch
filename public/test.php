<?php

$test = $_GET['test'];

if (isset($test)) {
	include_once "../tests/$test.php";
}
