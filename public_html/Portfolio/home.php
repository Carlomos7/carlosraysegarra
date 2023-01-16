<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<head>
    <Title>Carlos Ray Segarra</Title>
    <link rel="stylesheet" href="<?php echo get_url('styles/home.css'); ?>">
</head>
<body>
    <article class="content-containers">
    <div class="row">
            <div class="column">
                <h3> <b>&lt;</b>Hello, I'm</h3>
                <h1><b>Carlos Ray Segarra</b></h1>
                <h3>B.S Information Technology Specializing in Website Development<b>!<span>&gt;</b><h3>
            </div>
            <div class="container-fluid home-card-container ms-auto column">
                <div class="card home-card">
                  <img src="https://carlomos7.github.io/image-repo/carlos_segarra.JPG" class="card-img-top" alt="Carlos Segara Portfolio Picture">
                  <div class="card-body">
                    <a href="<?php echo get_url('aboutme.php'); ?>" class="btn">More Carlos</a>
                  </div>
                </div>
            </div>
        </div>
    </article>
    <?php include_once(__DIR__ . "/../../partials/footer.php") ?>
</body>
