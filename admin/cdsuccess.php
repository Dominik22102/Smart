<html>
<body>


<?php
require_once('adheader.php');
echo ("Datei erstellt!");
$myfile = fopen("datein/".$_POST["fname"], "w") or die("Unable to open file!");
fwrite($myfile, $_POST["befehl"]);
fclose($myfile);
header("Location: ../aindex.php");
exit();
?>

</body>
</html>