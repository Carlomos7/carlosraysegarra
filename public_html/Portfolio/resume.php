<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<head>
    <Title>Carlos' Resumé </Title>
    <link rel="stylesheet" href="<?php echo get_url('styles/resume.css'); ?>">
<head>
<body>
    <article class="content-containers">
    <div class="container-fluid table-container justify-content-center">

        <div class="row table-heading">
            <div class ="col-md-auto">
                <h1>Carlos Segarra</h1>
            </div>
            <div class="col-sm-4">
                    South Plainfield,
                    <br> NJ 07080
                    <br>(973) 951-2465
                    <br>carlos.segarrajf@gmail.com
            </div>
            <hr>
        </div>

        <div class="row">

            <div class="col-sm-3">
            <table>
                <tr>
                    <td><h4>Education</h4>
                    BS, INFORMATION
                    TECHNOLOGY
                    <br>New Jersey Institute of
                    Technology, <br>Newark NJ
                    <br>EXPECTED GRADUATION
                    DECEMBER 2023<hr></td>
                </tr>
                <tr>
                    <td><h4>Skills</h4>
                    Python, Java, JavaScript,
                    HTML, CSS, PHP, SQL,
                     Git, Docker, Flask
                      <br>Languages:
                     <br>Fluent in Spanish<hr>
                    </td>
                </tr>
                <tr>
                    <td><h4>RELEVANT COURSES</h4>
                        Computer Systems and
                        Networks
                        <br>Internet & Applications
                        <br>Database Design
                        Management & Applications
                        <br>Advanced Programming for
                        Information Technology
                        <br>Information Design
                        Techniques
                    </td>
                </tr>
            </table>
            </div>
            <div class= "col-md-auto vertical-line"></div>
            <div class="col-sm">
                <table >
                    <tr>
                    <td><h4>OBJECTIVE</h4>
                        Seeking a part-time internship where I can utilize my
                        understanding of and experience in core concepts related to
                        website development and computer programming as a
                        member of the information technology field.
                        <hr>
                    </td>
                    </tr>
                    <td><h4>WORK EXPERIENCE</h4>
                        WHOLE FOODS | Metuchen, NJ | 2020 – 2022<br>
                        <i>Grocery Team Member</i>
                        <ul>
                            <li>Cultivated a customer-focused shopping environment by
                                greeting and responding to all customers in a friendly manne</li>
                            <li>Developed knowledge about products and sales items to
                                answer shoppers' questions</li>
                            <li>Completed all point of sale opening and closing procedures</li>
                        </ul>
                        NEW JERSEY INNOVATION INSTITUTE | Newark, NJ | 2018 – 2020<br>
                        <i>Project Assistant</i>
                        <ul>
                            <li>Assisted in general administrative support on various projects</li>
                            <li>Maintained legal documents, such as participation and
                                business associate agreements</li>
                            <li>Exercised graphic design skills to conceptualize flyers, badges,
                                and other conference event materials</li>
                            <li>Compiled various reports and spreadsheets, such as team
                                projections and quarterly invoices</li>
                            <li>Scheduled and coordinated meeting appointments</li>
                            <li>Transcribed meeting minutes and distributed via email</li>
                            <li>Maintained utmost discretion when dealing with PHI</li>
                            <li>Trained new project assistants</li>
                        </ul>
                    </td>
                    <tr>
                    </tr>
                </table>
            </div>

        </div>
        
    </div>
        <div class="container-fluid d-flex justify-content-center" style="padding:1rem 0 1rem 0;">
        <a href="javascript:;" class="btn mt-auto align-self-start">Download PDF</a>
        <a href="https://carlomos7.github.io/image-repo/Carlos_Segarra_GH.pdf" class="btn mt-auto align-self-start"
        target="_blank" rel="noopener noreferrer">View PDF</a>
        </div>
    </article>
    <?php include_once(__DIR__ . "/../../partials/footer.php") ?>
</body>




