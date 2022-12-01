<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<head>
    <Title>Carlos Ray Segarra</Title>
    <link rel="stylesheet" href="<?php echo get_url('styles/home.css'); ?>">
</head>
<body class="containers">
    <article class="content-containers row">
        <div class="column">
            <h1><b>Carlos Ray Segarra</b></h1>
            <hr>
            <p class="intro">
            My name is Carlos Segarra. I am a third-year Information Technology major specializing in Website Development.
            Most of my tech background comes from gaming. I attended a coding camp focused on Minecraft mod development
            when I was around 13 and have been hooked ever since. In making this website, I am hoping to advance my skills
            and learn new ones. </p>
        </div>
        <div class="container-fluid home-card-container ms-auto column">
            <div class="card home-card">
              <img src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" class="card-img-top" alt="blank profile picture">
              <div class="card-body">
                <a href="<?php echo get_url('contactme.php'); ?>" class="btn">Contact Me</a>
              </div>
            </div>
        </div>
    </article>
    <?php include_once(__DIR__ . "/../../partials/footer.php") ?>
</body>
