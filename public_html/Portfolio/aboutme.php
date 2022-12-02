<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<head>
    <Title>About Carlos</Title>
    <link rel="stylesheet" href="<?php echo get_url('styles/aboutme.css'); ?>">
</head>
<body>
    <?php include_once("analyticstracking.php") ?>
    <article class="content-containers">
        <h1> <b>About Me</b></h1>
        <hr>
        <p class="intro">
        My name is Carlos Segarra. I am a third-year Information Technology major specializing in Website Development.
        Most of my tech background comes from gaming. I attended a coding camp focused on Minecraft mod development
        when I was around 13 and have been hooked ever since. In making this website, I am hoping to advance my skills
        in CSS, JavaScript, PHP, and server hosting. </p>
        <p class="intro"> <img src="https://cdn-icons-png.flaticon.com/512/20/20079.png" alt="Blank Profile Picture">
        My hobbies include reading books and comics, playing video games, and coding. I have proficient Java
        programming skills and general knowledge of HTML, MySQL, PHP, JavaScript, and C++. Lorem ipsum dolor sit amet,
        consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae
        scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa.
        Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio.
        Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper
        ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus
        gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras
        ac leo purus. Mauris quis diam velit</p>

        <a href="<?php echo get_url('contactme.php'); ?>" class="btn">Contact Me</a>
    </article>
    <?php include_once(__DIR__ . "/../../partials/footer.php") ?>
</body>