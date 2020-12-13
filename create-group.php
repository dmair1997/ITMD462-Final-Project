<?php
  $page="create-group";
  include_once('header.php');
  include('config.php');
if(isset($_POST['insert'])){
    $c_name=$_POST['c_name'];
    $c_course=$_POST['c_course'];
    $c_meetingtime=$_POST['c_meetingtime'];
    $c_meetingmethod=$_POST['c_meetingmethod'];
    $c_email=$_POST['c_email'];

    $sql= "INSERT INTO create_group (c_name,c_course,c_meetingtime,c_meetingmethod,c_email) VALUES ('$c_name','$c_course','$c_meetingtime','$c_meetingmethod','$c_email')";
    $result = mysqli_query($connection,$sql);
}

?>

<div class="sub-blocks-cover overlay" data-aos="fade" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">


            <div class="col-md-12 text-left">
                <h1 class="text-uppercase" data-aos="fade-up">Create Group</h1>

            </div>

        </div>
    </div>
</div>

<section class="site-section bg-light" id="contact-section" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3 section-title-after">Create a group</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-5">

                <form action="create-group.php" method="POST" enctype="multipart/form-data" class="p-5 bg-white">

                    <h2 class="h4 text-black mb-5">Contact Form</h2>

                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Group Name</label>
                            <input type="text" id="fname" name="c_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Course Name</label>
                            <input type="text" id="lname" name="c_course" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="meeting_t">Meeting Day/Time</label>
                            <input type="datetime-local" id="meeting_t" name="c_meetingtime" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="meeting_m">Meeting Method</label>
                            <input type="text" id="meeting_m" name="c_meetingmethod" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Leader Email</label>
                            <input type="email" id="email" name="c_email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" value="Send Message" name="insert"
                                class="btn btn-theme btn-md text-white">Create</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php

    include_once('footer.php');
?>