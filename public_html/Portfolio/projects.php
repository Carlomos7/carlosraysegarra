<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<head>
    <Title>Carlos' Projects</Title>
    <link rel="stylesheet" href="<?php echo get_url('styles/projects.css'); ?>">
<head>
<body>
<?php include_once("/../../lib/analyticstracking.php") ?>
<article class="content-containers">
<h1><b>My Projects</b></h1>
<hr>
<div class="row">

  <div class="col-lg-4 mb-3 d-flex align-items-stretch">
        <div class="square-content container">
            <div class="card">

                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Simple Shop</h4>
                    <p class="card-text mb-4">This project will create a simple e-commerce site for users. Administrators
                    or store owners will be able to manage inventory and users will be able to manage their cart
                    and place orders.</p>
                    <a href="https://github.com/Carlomos7/IT202-450/blob/prod/public_html/Project/Proposal.md" target="_blank" rel="noopener noreferrer" class="btn mt-auto align-self-start">Github Repo</a>
                </div>
            </div>
        </div>
  </div>

  <div class="col-lg-4 mb-3 d-flex align-items-stretch">
        <div class="square-content container">
            <div class="card">

                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Spooky Roll-A-Ball</h4>
                    <p class="card-text mb-4">I have implemented several modifications into the original roll-a-ball
                    game have changed it a few ways while also building off the same mechanics. All edits made have been
                    tailored to fit my Spooky-Roll-A-Ball game</p>
                    <a href="https://cs525.itch.io/spooky-roll-a-ball" target="_blank" rel="noopener noreferrer" class="btn mt-auto align-self-start">Itch.io</a>
                </div>
            </div>
        </div>
  </div>

  <div class="col-lg-4 mb-3 d-flex align-items-stretch">
        <div class="square-content container">
            <div class="card">

                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Unity Painter</h4>
                    <p class="card-text mb-4"> Use right-click to draw in this Unity Project using randomized 3D shapes!</p>
                    <a href="https://cs525.itch.io/it-201-sprint-3" target="_blank" rel="noopener noreferrer" class="btn mt-auto align-self-start">Itch.io</a>
                </div>
            </div>
        </div>
  </div>

</div>
<div class="row">

  <div class="col-lg-4 mb-3 d-flex align-items-stretch">
        <div class="square-content container">
            <div class="card">

                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Bridge Builder</h4>
                    <p class="card-text mb-4">Walk around with AWSD and jump with space. Place a bridge game object with
                    right-click. I recommend using a combination of jumping and placing bridge objects to obtain the
                    flower pick-up objects. You can also try and connect towers by rapidly placing bridge objects.</p>
                    <a href="https://cs525.itch.io/sprint-4-bridge-builder" target="_blank" rel="noopener noreferrer"class="btn mt-auto align-self-start">Itch.io</a>
                </div>
            </div>
        </div>
  </div>

  <div class="col-lg-4 mb-3 d-flex align-items-stretch">
        <div class="square-content container">
            <div class="card">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Python Data Science Calculator</h5>
                    <p class="card-text mb-4">Designed program that ues statistics to help select a test data sample
                    from a complete data (population).</p>
                    <a href="https://github.com/NJIT-WIS/project1_fall_2022-Carlomos7" target="_blank" rel="noopener noreferrer" class="btn mt-auto align-self-start">Github Repo</a>
                </div>
            </div>
        </div>
  </div>

  <div class="col-lg-4 mb-3 d-flex align-items-stretch">
        <div class="square-content container">
            <div class="card">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Online Portfolio</h5>
                    <p class="card-text mb-4">In making this website, I am hoping to advance my skills in CSS, JavaScript, PHP, and server hosting.</p>
                    <a href="<?php echo get_url('home.php'); ?>" target="_blank" rel="noopener noreferrer" class="btn mt-auto align-self-start">Home!</a>
                </div>
            </div>
        </div>
  </div>


</div>
</article>

    <?php include_once(__DIR__ . "/../../partials/footer.php") ?>
</body>
