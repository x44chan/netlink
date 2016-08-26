    <!-- Static navbar -->
    <nav id = "mainNav" class="navbar navbar-custom navbar-fixed-top navbar-custom affix-top">
      <div class="container-fluid" style="margin: 0px 15px 0px 15px;">
        <div style = "float: bottom" class="navbar-header">
        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        	</button>
        	<a class="navbar-brand" href="/netlink"><span class="icon-office"></span> Netlink </a>
            <!--<a href="/netlink"><img src="img/logo.png" class="logo-nav" alt="Responsive image"> </a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<ul class="nav navbar-nav navbar-left">
                <li><a role = "button" href="/netlink"><span class="icon-home3" style = "font-weight: bold;"></span> Home</a></li>
        	    <li><a role = "button" href="projects"><span class="icon-stack"></span> Projects </a></li>
                <li class="dropdown">
                    <a role = "button" href="services"><span class="icon-clipboard"></span> Services <b class = "caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php
                            $sermenu = "SELECT * FROM services order by services_id ASC";
                            $sermenu = $conn->query($sermenu);
                            if($sermenu->num_rows > 0){
                                while ($rowmenu = $sermenu->fetch_object()) {
                                    echo '<li><a role = "button" href = "services/view/'.$rowmenu->services_id.'"><span class="icon-codepen"></span> '.$rowmenu->header.'</a></li>';
                                }
                            }
                        ?>
                    </ul>
                </li>
                <li><a role = "button" href="careers"><span class="icon-user-tie"></span> Careers </a></li> 
                <li><a role = "button" href="about"><span class="icon-address-book"></span> About Us </a></li>
            </ul>
        	<ul class="nav navbar-nav navbar-right">
                <li><a role = "button" href="contact"><span class="icon-phone"></span> Contact Us </a></li>
        		<!--<li class="dropdown" <?php if(isset($_POST['uname'])){ echo ' id = "hov" '; } ?>>
            		<a href = "#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-user"></span><b class="caret"></b></a>
            		<ul class="dropdown-menu" role="menu">
                        <?php  if(isset($_SESSION['acc_id'])){ ?>            			
        					<li><a role = "button" data-toggle="modal" data-target="#changepass"><span class="icon-eye"></span> Change Password </a></li>
                    		<li><a style = "color: red;" role = "button" href = "logout"><span class="icon-switch"></span> Log Out </a></li>					
            	        <?php }else{ ?>
                            <li>
                                <form action="" method="post" style="width: 250px; padding: 5px 10px; color: white;">
                                    <div class="form-group" align="center">
                                        <h4><span class = 'icon-lock'></span> Login Form</h4>
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        <label for="usrname"><span class="icon-user"></span> Username </label>
                                        <input <?php if(isset($_POST['uname'])){ echo 'value ="' . $_POST['uname'] . '"'; }else{ echo 'autofocus ';}?>placeholder = "Enter Username" id = "uname" title = "Input your username." type = "text" class = "form-control input-sm" required name = "uname"/></div>
                                    <div class="form-group">
                                        <label for="psw"><span class="icon-eye"></span> Password </label>
                                        <input <?php if(isset($_POST['uname'])){ echo 'autofocus '; }?> placeholder = "Enter Password" id = "pword" title = "Input your password." type = "password" class = "form-control  input-sm" required name = "password"/>
                                        <hr>
                                    </div>
                                    <div class="form-group" align="center">
                                        <button style="width: 110px;" name = "submit" class="btn btn-success btn-block btn-sm"><span class="icon-switch"></span> Login </button>
                                    </div>
                                </form>
                            </li>                    
                        <?php } ?>
                    </ul>
            	</li>--> 
        	</ul>
        </div>
      </div>
    </nav>