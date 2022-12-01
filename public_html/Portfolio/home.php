<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<head>
    <Title>Carlos Ray Segarra</Title>
    <link rel="stylesheet" href="<?php echo get_url('styles/home.css'); ?>">
</head>
<body class="containers">
    <article class="content-containers">
        <h1><b>Carlos Ray Segarra</b></h1>
        <p class="intro">My name is Carlos Segarra. I am a third-year Information Technology major specializing in Website Development.
        Most of my tech background comes from gaming. I attended a coding camp focused on Minecraft mod development
        when I was around 13 and have been hooked ever since. In making this website, I am hoping to advance my skills
        and learn new ones. </p>
        <p class="intro">
            <div class="container-fluid home-card-container">
                <div class="card home-card">
                  <img src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" class="card-img-top" alt="blank profile picture">
                  <div class="card-body">
                    <a href="<?php echo get_url('contactme.php'); ?>" class="btn">Contact Me</a>
                  </div>
                </div>
            </div>
        My hobbies include reading books and comics, playing video games, and coding. I have proficient Java
        programming skills and general knowledge of HTML, MySQL, PHP, JavaScript, and C++. Lorem ipsum dolor sit amet,
        consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae
        scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa.
        Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio.
        Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper
        ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus
        gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras
        ac leo purus. Mauris quis diam velit</p>

    </article>
    <?php include_once(__DIR__ . "/../../partials/footer.php") ?>
</body>
