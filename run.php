<?php
/**
 * Created by PhpStorm.
 * User: dhorn
 * Date: 09.04.2018
 * Time: 14:58
 */
$url = "";
if(isset($_GET['command'])) {
    $com = $_GET['command'];
	shell_exec('sudo pkill akt.sh');
	shell_exec('sudo cp /usr/local/bin/'.$com.' /usr/local/bin/akt.sh');
    shell_exec('/usr/local/bin/akt.sh');
    header("Location:index.php");
}