<?php include('../models/header.php');?>

    <main id="contact">
      <h1 class="lg-heading">
        Contact
        <span class="text-secondary">Me</span>
      </h1>
      <h2 class="sm-heading">
        This is how you can email me
      </h2>

      <form action="./contact-form.php" class="form-control" method="post">
        <input type="text" name="name" placeholder="Your name">
        <input type="text" name="mail" placeholder="Your e-mail">
        <input type="text" name="subject" placeholder="The subject">
        <textarea name="msg" placeholder="Your message"></textarea>
        <button class="text-secondary" type="submit" name="submit">Send Mail</button>
      </form>
    
    </main>

<?php include('../models/footer.php');?>
