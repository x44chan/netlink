<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-sm-6">
            <h4><u><span class="icon-mail2"></span> Email Us.</u></h4>
            <hr>
            <form action = "" method="post" accept-charset="utf-8">
                <?php 
                    if(isset($_SESSION['succemail']) && $_SESSION['succemail'] != ""){
                        echo '<div align = "center"><font color = "green"><label>' . $_SESSION['succemail'] . '</label></font></div>';
                        $_SESSION['succemail'] = "";
                    }
                ?>
                <label>Your Name <font color = "red">*</font></label>
                <input type = "text" name = "ename" class="form-control input-sm" placeholder = "Enter your name" required>
                <br>
                <label>Email <font color = "red">*</font></label>
                <input type = "text" name = "email" class="form-control input-sm" placeholder = "Enter your email" required>
                <br>
                <label>Subject <font color = "red">*</font></label>
                <input type = "text" name = "esub" class="form-control input-sm" placeholder = "Enter your email" required>
                <br>
                <label>How can we help? <font color = "red">*</font></label>
                <textarea class="form-control input-sm" name = "econt" placeholder = "How can we help?" rows="4" cols="50"></textarea>
                <br>
                <button class="btn btn-primary btn-sm center-block" name = "emailsub"> Submit </button>
            </form>
        </div>
        <div class="col-xs-12 col-md-6 col-sm-6">
            <h4><u><span class="icon-phone"></span> Call Us.</u></h4>
            <hr>
            <label><span class = "icon-phone-hang-up"></span> Landline </label>
            <p style="margin-left: 10px;"><i>(049) 502 - 9657 / 502 - 9678</i></p>
            <br>
            <label><span class = "icon-printer"></span> Fax </label>
            <p style="margin-left: 10px;"><i>(049) 502 - 9656</i></p>
            <br>
            <label><span class = "icon-mobile"></span> Mobile </label>
            <p style="margin-left: 10px;"><i>+63 998-5564761 / +63 917-8377077</i></p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <hr>
            <h4><u><span class="icon-map"></span> Visit Us.</u></h4>
            <!--<iframe src="https://www.google.com/maps/d/embed?mid=1oQXUKUcThe3vi-qX0Vz4Q--Jd4Y" width="100%" height="480"></iframe>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1933.5765909037793!2d121.36850365792682!3d14.244284997507565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDE0JzM5LjQiTiAxMjHCsDIyJzEwLjYiRQ!5e0!3m2!1sen!2sph!4v1474948786282" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>    
</div>
<?php
    if(isset($_POST['emailsub'])){
        $mail_To = 'chano.rocks@gmail.com';
        $mail_Subject = $_POST['esub'];
        $headers = "From: ".$_POST['ename']." autoemail@netlinkph.net\r\nReply-To: ". $_POST['email'];
        $headers .= 'Cc:' . $_POST['email'] . "\r\n";
        $mail_Body = $_POST['econt'];
        mail($mail_To, $mail_Subject, $mail_Body,$headers);

        $_SESSION['succemail'] = "Email Sent! Thank you for your email, we will contact you back soon ~";
        echo '<script>window.location.href="contact";</script>';
    }
?>