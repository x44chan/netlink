<?php
    include '../config/conf.php';
    if(!isset($_GET['module'])){
        echo '<script type = "text/javascript">window.location.replace("/loan/");</script>';
    }
?>
<?php
    if(isset($_GET['apply'])){
        $job_id     = mysqli_real_escape_string($conn, $_GET['apply']);
        $careers    = "SELECT * FROM careers where career_id = '$job_id'";
        $careers    = $conn->query($careers)->fetch_object();
?>
<div class="modal-dialog">    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><span class = "icon-user-tie"></span> Applying for: <?php echo $careers->career_title;?></h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form enctype="multipart/form-data" role="form" action = "" method = "post">
                <div class="form-group">
                    <label>Name <font color="red"> * </font> </label>
                    <input type = "text" name = "name" class="form-control input-sm" placeholder = "Enter your name" required autocomplete = 'off'/>
                </div>
                <div class="form-group">
                    <label>Email <font color="red"> * </font> </label>
                    <input type = "text" name = "email" class="form-control input-sm" placeholder = "Enter your email" required autocomplete = 'off'/>
                </div>
                <div class="form-group">
                    <label>Cover Letter <font color="red"> * </font> </label>
                    <textarea name = "message" class="form-control input-sm" placeholder = "How can we help?" required> </textarea>
                </div>
                <div class="form-group">
                    <label>Attach your resume <font color="red"> * </font> (doc, docx and pdf only)</label>
                    <input type="file" name="file" id="file" class="form-control input-sm" accept=".docx,.pdf,.doc" required>
                </div>                
                <input type="hidden" name = "appost" value="<?php echo $careers->career_title;?>">
                <div class="form-group" align="center">
                    <button class="btn btn-sm btn-success" name = "submitapp"> Submit Application </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    }
?>