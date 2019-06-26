<?php include('../models/header.php');?>

    <main id="contact">
      <h1 class="lg-heading">
        Contact
        <span class="text-secondary">Me</span>
      </h1>

      <div class="containerr">
        <form action="./contact-form.php">

          <label for="name">Your Name</label>
          <input type="text" name="name" placeholder="Your name..">

          <label for="email">Your e-mail</label>
          <input type="text" name="email" placeholder="Your e-mail..">>

          <label for="subject">Subject</label>
          <input type="text" name="subject" placeholder="The subject..">

          <label for="msg">Message</label>
          <textarea id="subject" name="msg" placeholder="Write something.." style="height:200px"></textarea>

          <input type="submit" value="Submit" name="submit">

        </form>
      </div>
    
    </main>

<?php include('../models/footer.php');?>
