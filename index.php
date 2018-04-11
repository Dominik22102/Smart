<html>
<head>
    <?php
    require_once('dbconnect.php');
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="font-size: larger; background-color: #f4f4f4;">
<link href='https://fonts.googleapis.com/css?family=Raleway:500,400,300,200,100' rel='stylesheet' type='text/css'>
<canvas class="container" id="container" role="main"></canvas>
<div class="content">
    <div class="w3-dropdown-click">
        <button onclick="myFunction()" class="button blue">menu</button>
        <div id="Demo" class="w3-dropdown-content">
            <?php

            $sql = 'SELECT * FROM buttons';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<a href="run.php?command=' . $row["Datei"] . '"><button class="button ' . $row["Farbe"] . '">' . $row["Name"] . '</button></a><br>';
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
    </div>
</div>
<?php $conn->close(); ?>

<div class="blur blurTop"><canvas class="canvas" id="blurCanvasTop"></canvas></div>
<div class="blur blurBottom"><canvas width="1000px" height="1000px" class="canvas" id="blurCanvasBottom"></canvas></div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js'></script>
<script src="js/index.js"></script>
<script>
    function myFunction() {
        var x = document.getElementById("Demo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
</body>
</html>
