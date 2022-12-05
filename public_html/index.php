<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
require(__DIR__ . "/../lib/functions.php");
$BASE_PATH = '\Portfolio';
echo "Hello World!";
redirect("$BASE_PATH" . "/../home.php");
?>
<head>
    <?php include_once("analyticstracking.php") ?>
</head>