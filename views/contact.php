<?php include('../models/header.php');?>

    <main id="contact">
      <h1 class="lg-heading">
        Contact
        <span class="text-secondary">Me</span>
      </h1>

      <form class="boilerform" action="" method="post">
        <fieldset class="c-form">
            <div class="c-form__row">
                <label for="name" class="c-label">Name</label>
                <input type="text" name="name" id="name" class="c-input-field" value="" autocorrect="off" required />
            </div>
            <div class="c-form__row">
                <label for="email" class="c-label">Email</label>
                <input type="email" name="email" id="email" autocapitalize="none" autocorrect="off" class="c-input-field" required />
            </div>
            <div class="c-form__row">
                <label for="message" class="c-label">Your message</label>
                <textarea name="msg" id="message" class="c-input-field c-input-field--multiline" rows="10"></textarea>
            </div>
            <div class="c-form__row">
                <button class="c-button" type="submit" name="submit">Submit</button>    
            </div>
          </fieldset>
      </form>
    
    </main>

<?php include('../models/footer.php');?>
