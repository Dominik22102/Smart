<?php
/**
 * Created by PhpStorm.
 * User: dhorn
 * Date: 09.04.2018
 * Time: 13:36
 */
if(isset($_GET['p'])) {
    $n = $_GET['p'];
} else {
    $n = 1;
}
switch ($n) {
    case 2:
        require_once('adheader.php');
        require_once('cd.php');
        break;
    case 3:
        require_once('adheader.php');
        require_once('files.php');
        break;
    case 4:
        require_once('adheader.php');
        require_once('uploadhtml.php');
        break;
    default:
        require_once('abuttons.php');
}