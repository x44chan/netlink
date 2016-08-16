<?php
  session_start();
  include 'config/title.php';
  include 'config/header.php';
  include 'config/conf.php';  
  include('config/menu.php');
  if(!isset($_GET['module'])){
    $_GET['module'] = 'main';
  }
?>
<?php  if(isset($_SESSION['acc_id'])){ ?>
  <div class="modal fade" id="changepass" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Update Password</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action = "" method = "post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" required id="psw" name = "pword" autocomplete="off"placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
              <input type="password" class="form-control" required id="psw1" name = "pword2" autocomplete="off"placeholder="Enter password">
            </div>
            <button type="submit" id = "submitss" name = "submitpw" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
  <div id="loader"></div>
  <div class = "container-fluid animate-bottom" id = "tohide" <?php if(!isset($_GET['print'])){ echo ' style="margin-top:55px; display: none;"'; }else{ echo ' style = "visibility: hidden" '; }?>>
    <?php
      include 'ajax/func.php';
      if(!isset($_GET['action'])){
          $acc = 'index.php';
      }else{
          $acc = $_GET['action'].'.php';
      }
      if(!isset($_GET['module'])){
        include 'modules/main/index.php';
      }elseif($_GET['module'] == 'logout'){
          include 'modules/logout.php';
      }elseif(!file_exists('modules/'.$_GET['module'].'/'.$acc)){
          include 'config/404.php';
      }else{
          include 'modules/'.$_GET['module'].'/'.$acc;
      }
      include('config/footer.php');
      if(isset($_POST['submit'])){
        $uname = mysqli_real_escape_string($conn, $_POST['uname']);
        $password =  mysqli_real_escape_string($conn, $_POST['password']);
        
        $sql = "SELECT * FROM `user` where uname = '$uname' and pword = '$password'";
        $result = $conn->query($sql);   
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){               
            $_SESSION['acc_id'] = $row['account_id'];
            $_SESSION['name'] = $row['fname'] . ' ' . $row['mname'] . ', ' . $row['lname'];
            $_SESSION['username'] = $row['uname'];
            //$_SESSION['level']=$row['level'];
            echo '<script type="text/javascript">alert("Login Successful"); setTimeout(function() {window.location.href = "/netlink"},1000);; </script>'; 
          }       
        }else{
            echo '<script type="text/javascript">alert("Incorrect Login"); setTimeout(function() {window.location.href = "/netlink"},1000);; </script>'; 
          }
        $conn->close();
      }
    
    ?>
