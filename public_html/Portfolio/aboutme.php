<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<head>
    <Title>About Carlos</Title>
    <link rel="stylesheet" href="<?php echo get_url('styles/aboutme.css'); ?>">
</head>
<body>
    <article class="content-containers">
        <h1> <b>Carlos Segarra</b></h1>
        <hr>
        <p class="intro">
        I am a motivated and ambitious student at the New Jersey Institute of Technology, studying Information
        Technology with a specialization in Website Development. I am passionate about technology and programming
        languages and am eager to begin my career in the tech industry upon graduation in December 2023.<br>
        I possess a strong foundation in programming languages such as Python, Java, JavaScript, HTML, CSS, PHP, and
        SQL, and am proficient in Git, Docker, and Flask, allowing me to manage and deploy projects efficiently. My
        coursework includes Computer Systems and Networks, Internet & Applications, Database Design, Advanced
        Programming for Information Technology, and Information Design Techniques. </p>
        <p class="intro"> <img src="https://cdn-icons-png.flaticon.com/512/20/20079.png" alt="Blank Profile Picture">
        I have gained real-world experience as a Project Assistant at the New Jersey Innovation Institute, where I
        collaborated on short- and long-term projects, oversaw tasks delegated by the project manager, coordinated
        with vendors and service providers, and ensured projects were completed on time and within budget. I
        brought strong organizational skills, adaptability, and the ability to prioritize tasks while working
        independently to this role. I was required to be available for a maximum of 24 hours per week during
        business hours, reported to the Project Manager, and contributed to the entire project lifecycle. <br>
        I have completed several projects, including Simple Shop, Roll-A-Ball Modifications, Unity Painter, and
        Python Data Science Calculator, which showcase my skills and abilities. In my free time, I enjoy coding,
        reading comics, and playing video games. My skills and experience make me a great candidate for any
        IT-related job, and I am eager to continue learning and making an impact in the tech industry.</p>

        <a href="<?php echo get_url('contactme.php'); ?>" class="btn">Contact Me</a>
    </article>
    <?php include_once(__DIR__ . "/../../partials/footer.php") ?>
</body>
