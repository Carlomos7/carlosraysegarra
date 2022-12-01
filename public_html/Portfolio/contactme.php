<!--DEVELOPER: Carlos Segarra, IS 117-003, Fall 2022 -->
<?php
require(__DIR__ . "/../../partials/nav.php");


?>
<head>
    <Title>Contact Carlos!</Title>
    <link rel="stylesheet" href="<?php echo get_url('styles/contactme.css'); ?>">
<head>
<body>
<div class="col-9 content-containers">
    <div class="container">
      <form action="mailto:cs525@njit.edu" method="POST" enctype="text/plain">
        <!-- 2 column grid layout with text inputs for the first and last names -->
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
        <div class="col">
          <div class="form-outline">
            <input type="text" name="phone" class="form-control" placeholder="Enter Phone"/>
            <label class="form-label" for="phone">Phone</label>
          </div>
        </div>
        </div>
        <div class="form-group">
          <textarea name="message" class="form-control" tabindex="4"
                    placeholder="Write your details" required></textarea>
          <label class="form-label" for="message">Message</label>
        </div>
        <input type="submit" class="btn btn-primary"></input>
      </form>
    </div>
  </div>
  <?php include_once(__DIR__ . "/../../partials/footer.php") ?>
</body>
</html>