<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
require_once(__DIR__ . "/../lib/functions.php");
$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
    $domain = explode(":", $domain)[0];
}
$localWorks = true;
if (($localWorks && $domain == "localhost") || $domain != "localhost") {
    session_set_cookie_params([
        "lifetime" => 60 * 60,
        "path" => "$BASE_PATH",
        //"domain" => $_SERVER["HTTP_HOST"] || "localhost",
        "domain" => $domain,
        "secure" => true,
        "httponly" => true,
        "samesite" => "lax"
    ]);
}
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, intitial-scale=1">
  <link rel="icon" href="https://carlomos7.github.io/image-repo/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_url('styles/styles.css'); ?>">
  <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<div class="container-fluid csnav">
    <nav class="navbar navbar-expand-lg bs-side-navbar">
        <a class="navbar-brand" href="<?php echo get_url('home.php'); ?>">
        <img class ="web-logo" src="https://carlomos7.github.io/image-repo/CRS_logo.png" alt="Carlos Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <br>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class ="navbar-nav mr-auto">
                <li class ="nav-item">
                    <a class ="nav-link" href="<?php echo get_url('home.php'); ?>">Home</a>
                </li>
                <br>
                <li class ="nav-item">
                    <a class ="nav-link" href="<?php echo get_url('aboutme.php'); ?>">About Me</a>
                </li>
                <br>
                <li class ="nav-item">
                    <a class ="nav-link" href="<?php echo get_url('work.php'); ?>">Work</a>
                </li>
                <br>
                <li class ="nav-item">
                    <a class ="nav-link" href="<?php echo get_url('projects.php'); ?>">Projects</a>
                </li>
                <br>
                <li class ="nav-item">
                    <a class ="nav-link" href="<?php echo get_url('resume.php'); ?>">Resume</a>
                </li>
                <br>
                <li class ="nav-item">
                    <a class ="nav-link" href="<?php echo get_url('contactme.php'); ?>">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>