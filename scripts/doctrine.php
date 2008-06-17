<?php
require dirname(__FILE__).'/../application/global.php';

#$cli = new Doctrine_Cli(Zend_Registry::get('doctrine_config'));

$dconfig = Zend_Registry::get('doctrine_config');

if (isset($_GET['arg'])) {
	if ($_GET['arg'] == 'gen_models') {
		echo "Generating Models <br />\n";
		echo Doctrine::generateModelsFromDb($dconfig["models_path"]);
		//echo Doctrine::generateModelsFromDb();
	} else if ($_GET['arg'] == 'gen_yaml_from_db') {
		echo "Generating Yaml From DB <br />\n";
		echo Doctrine::generateYamlFromDb($dconfig["yaml_schema_path"]);
	}
}

#var_dump ($dconfig);

?>

<br />
<br />
<a href="/ds.php?arg=gen_models">gen_models</a> <br />
<a href="/ds.php?arg=gen_yaml_from_db">gen_yaml_from_db</a> <br />


