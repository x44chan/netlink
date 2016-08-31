<div class="container">
	<div class="container-fluid">
		<div class="col-xs-12" align="center">
			<img src="img/join_us.jpg" style = "max-height: 400px; width: 100%;" class="img-responsive">
		</div>
	</div>
	<div class="col-xs-12" align="center">
		<h4 style="font-size: 30px;"><b>Join Us</b></h4>
	</div>
</div>
<div class="container">
	<div class="panel-group" id="accordion">
		<?php
			$view_careers = "SELECT * FROM careers";
			$view_careers = $conn->query($view_careers);
			while ($careers = $view_careers->fetch_object()) {
		?>
    	<div class="panel panel-default">
    		<div class="panel-heading">
        		<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $careers->career_id;?>"><?php echo $careers->career_title;?> <b class = "caret"></b></a></h4>
    		</div>
	    	<div id="<?php echo $careers->career_id;?>" class="panel-collapse collapse">
	    		<div class="panel-body">
	    			<?php echo $careers->career_desc;?>
	        	</div>
	      	</div>
    	</div>
    	<?php } ?>
  	</div>
</div>
<?php
	if(isset($_POST['submitx'])){
		$careers = $conn->prepare("INSERT INTO careers (career_title, career_desc) VALUES (?, ?)");
		$careers->bind_param("ss", $_POST['career_title'], $_POST['career_desc']);
		$careers->execute();
		/*  	
		<form action="" method="post">
  			<input type = "text" class = "form-control" name = "career_title"/>
	  		<textarea name="career_desc"></textarea>
	  		<button class="btn btn-sm center-block" name = "submitx"> Submit </button>
	  	</form>
	  	*/
	}
?>