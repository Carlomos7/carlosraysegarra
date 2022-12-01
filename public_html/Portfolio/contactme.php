<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
    if(isset($_POST['message'])) {

    mail("carlos.segarrajf+crsxyz@email.address", $_POST['name-company'] . ":" . $_POST['subject'],
    $_POST['message'] . "From: " . $_POST['email']);

    }

require(__DIR__ . "/../../partials/nav.php");

?>
<head>
    <Title>Contact Carlos!</Title>
    <link rel="stylesheet" href="<?php echo get_url('styles/contactme.css'); ?>">
<head>
<body>
<article class="content-containers">
    <div class="container-fluid">
        <h1><b>Contact Me!</b></h1>
        <hr>
        <form method="POST" action="contactme.php">

            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" name="name-company" class="form-control" placeholder="Enter Name or Company" required/>
                  <label class="form-label" for="name-company">Name</label>
                </div>
              </div>

              <div class="col">
                <div class="form-outline">
                  <input type="text" name="email" class="form-control" placeholder="Enter email" required/>
                  <label class="form-label" for="email">Email address</label>
                </div>
              </div>

              <div class="form-outline mb-4">
                <input type="text" name="subject" class="form-control" placeholder="Enter Subject" required/>
                <label class="form-label" for="subject">Subject</label>
              </div>

              <div class="form-outline mb-4">
                <textarea class="form-control" name="message" rows="4" placeholder="Write your details" required></textarea>
                <label class="form-label" for="message">Message</label>
              </div>

              <button type="submit" class="btn btn-block mb-4">Send</button>
        </form>

    </div>
</article>
  <?php include_once(__DIR__ . "/../../partials/footer.php") ?>
</body>

<!--
          <div class="form-outline mb-4">
            <input type="text" name="name" class="form-control" placeholder="Enter Name or Company" required/>
            <label class="form-label" for="name">Name/Company</label>
          </div>

          <div class="form-outline mb-4">
            <input type="email" name="email" class="form-control" placeholder="Enter email" required/>
            <label class="form-label" for="email">Email address</label>
          </div>

-->