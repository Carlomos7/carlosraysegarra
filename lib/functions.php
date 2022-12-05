<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
$BASE_PATH = '/Portfolio';
//require_once __DIR__."/../config.php";
function get_url($dest) //get url
{
    global $BASE_PATH;
    if (str_starts_with($dest, "/")) {
        //handle absolute path
        return $dest;
    }
    //handle relative path
    return "$BASE_PATH/$dest";
}
//redirect
function redirect($path)
{
    if (!headers_sent()) {
        //php redirect
        die(header("Location: " . get_url($path)));
    }
    //javascript redirect
    echo "<script>window.location.href='" . get_url($path) . "';</script>";
    //metadata redirect (runs if javascript is disabled)
    echo "<noscript><meta http-equiv=\"refresh\" content=\"0;url=" . get_url($path) . "\"/></noscript>";
    die();
}
?>
