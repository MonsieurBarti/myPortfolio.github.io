<?php include('../models/header.php');?>

    <main id="contact">
      <h1 class="lg-heading">
        Contact
        <span class="text-secondary">Me</span>
      </h1>

      <div class="containerr">
        <form action="contact-form.php" method="post">

          <label class="dText" for="name">Your Name</label>
          <input type="text" name="name" placeholder="Your name..">

          <label class="dText" for="email">Your e-mail</label>
          <input type="text" name="email" placeholder="Your e-mail..">>

          <label class="dText" for="subject">Subject</label>
          <input type="text" name="subject" placeholder="The subject..">

          <label class="dText" for="msg">Message</label>
          <textarea id="subject" name="msg" placeholder="Write something.." style="height:200px"></textarea>

          <button type="submit" name="submit">Send Mail</button>
        </form>
      </div>
    
    </main>

<?php include('../models/footer.php');?>
