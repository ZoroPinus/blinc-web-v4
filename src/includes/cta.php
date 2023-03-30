<?php
$data = $dirFileName;
$result = explode("|", $data);
?>

<section class="cta-section">
  <div class="cta-card card text-center">
    <div class="card-body">
      <?php
      if ($result[0] == "internship") {
        echo '<h5 class="card-title">
          Ready for a challenge? <br>
          Unlock your potential with hands-on experience.
          </h5>
          <p class="card-text">
          Join our internship program today.
          </p>';
      } else if ($result[0] == "employment") {
        echo '<h5 class="card-title">
        Be part of something bigger than yourself. <br>
        Innovate, collaborate, and grow with us!
          </h5>
          <p class="card-text">
          Join our team today.
          </p>';
      } else {
        echo '<h5 class="card-title">
              Need something specific? <br> 
              Let\'s discuss your next dream project.
          </h5>
          <p class="card-text">
              Send us a message today and let us make it happen.
          </p>';
      }
      ?>

      <?php
      if ($result[0] == "internship") {
        echo '<a href="../contact/?type=internship|default" class="cta-btn btn">Send Message</a>';
      } else if ($result[0] == "employment") {
        echo '<a href="../contact/?type=employment|default" class="cta-btn btn">Send Message</a>';
      } else if($result[0] == "project" || $result[0] == "services" ){
        echo '<a href="../contact/" class="cta-btn btn">Send Message</a>';
      }else{
        echo '<a href="contact/" class="cta-btn btn">Send Message</a>';
      }
      ?>
    </div>
  </div>
</section>