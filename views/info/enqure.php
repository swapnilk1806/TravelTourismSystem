
<head>
    <link rel="stylesheet" href="../../public/css/info/enqure.css">
</head>
<?php include('./views/layouts/header.php') ?>

<div class="heade-dika">
    <div class="container">
      <div class="content">
        <div class="image-box">
          <!-- <img src="contact.png" alt="" /> -->
        </div>
        <form action="enqure_d" method="post">
          <div class="topic">Send us a message</div>
          <div class="input-box">
            <input name="name" type="text" required />
            <label>Enter your name</label>
          </div>
          <div class="input-box">
            <input name="package" type="text" required />
            <label>package name     </label>
          </div>
          <div class="input-box">
            <input name="email" type="text" required />
            <label>Enter your email</label>
          </div>
          <div class="message-box">
            <textarea name="message"></textarea>
            <label>Enter your message</label>
          </div>
          <div class="input-box">
            <input type="submit" value="Send Message" />
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include('./views/layouts/footer.php') ?>