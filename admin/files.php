<html>
<body>
<?php

if ($handle = opendir('admin/datein/')) {
    while (false !== ($entry = readdir($handle))) {
        echo "$entry\n <br>";
    }
    closedir($handle);
}
?>
</body>
</html>