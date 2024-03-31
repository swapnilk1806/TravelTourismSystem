<head>
  <link rel="stylesheet" href="../../public/css/info/contact.css">
</head>
<?php include('./views/layouts/header.php') ?>
<div class="header-swapnil">
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">MSG Collage malegoan</div>
          <div class="text-two">Nashik Maharashtra</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 95524 87844</div>
          <div class="text-two">+91 74994 74393</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">travalandtourismmanagement@gmail.com</div>
          <!-- <div class="text-two">info.codinglab@gmail.com</div> -->
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
        <form action="contact_us_d" method="post">
          <div class="input-box">
            <input type="text" name="name" placeholder="Enter your name" required />
          </div>
          <div class="input-box">
            <input type="text" name="email" placeholder="Enter your email" required />
          </div>
          <div class="input-box message-box">
            <textarea name="message" placeholder="Enter your message" required></textarea>
          </div>
          <div class="button-9">
            <button>Send Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('./views/layouts/footer.php') ?>