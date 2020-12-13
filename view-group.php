<?php
$page="view-group";
include_once('header.php');
include_once('config.php');
?>

<div class="sub-blocks-cover overlay" data-aos="fade" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">


            <div class="col-md-12 text-left">
                <h1 class="text-uppercase" data-aos="fade-up">View Group</h1>

            </div>

        </div>
    </div>
</div>

<section class="course-main">
    <div class="container">
        <div class="row">
            <?php
      $fetch_devices = mysqli_query($connection, "Select * from create_group");

      while ($row = mysqli_fetch_array($fetch_devices)) {
        echo '
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="course-1-item">
          <figure class="thumnail">
            <a href="course-single.html">
              <img src="images/img_7.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="category">
               <h3 class="text-center">' . $row['c_name'] . '</h3>
            </div>
          </figure>
          <div class="course-1-content pb-4">
            <h2 >' . $row['c_course'] . '</h2>
            <div class="rating text-center mb-3">
              <img class="img-fluid" src="images/5-starts.png" alt="">
            </div>
           <div class="justify-content-between">
             <p>' . $row['c_meetingtime'] . '</p>
             <p>' . $row['c_meetingmethod'] . '</p>
           </div>
            <p>' . $row['c_email'] . '</p>
         </div>
        </div>
      </div>';
      }
      ?>
        </div>
    </div>
</section>


<?php

include_once('footer.php');
?>