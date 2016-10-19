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
			if(!isset($_GET['id'])){
				$_GET['id'] = "";
			}
			$view_careers = "SELECT * FROM careers ORDER BY career_id = '$_GET[id]' DESC, urgent DESC";
			$view_careers = $conn->query($view_careers);
			while ($careers = $view_careers->fetch_object()) {
		?>
    	<div class="panel panel-custom">
    		<div class="panel-heading">
        		<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $careers->career_id;?>"><?php echo $careers->career_title;?> <b class = "caret"></b></a></h4>
    		</div>
	    	<div id="<?php echo $careers->career_id;?>" class="panel-collapse collapse">
	    		<div class="panel-body">
	    			<?php echo $careers->career_desc;?>
	    			<div align="center">
	    				<button type="button" onclick="apply(<?php echo $careers->career_id;?>)" class="btn btn-sm btn-success"><span class = "icon-user-tie"></span> Apply Now! </button>
	    			</div>
	        	</div>
	      	</div>
    	</div>
    	<?php } ?>
  	</div>
  	<!-- Add new
	  	<div class="row">
	  		<div class="col-xs-12">
	  			<form action="" method="post">
	  			<input type = "text" class = "form-control" name = "career_title"/>
		  		<textarea name="career_desc"></textarea>
		  		<button class="btn btn-sm center-block" name = "submitx"> Submit </button>
		  	</form>
	  		</div>
	  	</div>
	-->
	<div class="modal fade" id="apply" role="dialog"></div>
</div>
<?php
	if(isset($_POST['submitx'])){
		$careers = $conn->prepare("INSERT INTO careers (career_title, career_desc) VALUES (?, ?)");
		$careers->bind_param("ss", $_POST['career_title'], $_POST['career_desc']);
		$careers->execute();
	}
?>
<?php if(isset($_GET['id']) && $_GET['id'] != "") { ?>
<script>
	$(document).ready( function () {
	    $("#<?php echo $_GET['id']?>").collapse();
	    //$timeout(function(){ $("#<?php echo $_GET['id']?>").scrollTop($("#<?php echo $_GET['id']?>")[0].scrollHeight);}, 10);
	});
</script>
<?php } ?>

<!--
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
	  selector: 'textarea',
	  height: 500,
	  theme: 'modern',
	  plugins: [
	    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
	    'searchreplace wordcount visualblocks visualchars code fullscreen',
	    'insertdatetime media nonbreaking save table contextmenu directionality',
	    'emoticons template paste textcolor colorpicker textpattern imagetools'
	  ],
	  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	  toolbar2: 'print preview media | forecolor backcolor emoticons',
	  image_advtab: true,
	  templates: [
	    { title: 'Test template 1', content: 'Test 1' },
	    { title: 'Test template 2', content: 'Test 2' }
	  ],
	  content_css: [
	    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
	    '//www.tinymce.com/css/codepen.min.css'
	  ]
	 });
	</script>
-->
<?php
    if(isset($_POST['submitapp']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_FILES['file'])){
    	$to = 'chano.rocks@gmail.com';
    	$subject = "Application for: " . $_POST['appost'];

    	$message = strip_tags($_POST['message']);
    	$attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
    	$filename = $_FILES['file']['name'];

    	$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
    	// Allow certain file formats
		if(strtolower($imageFileType) != "doc" && strtolower($imageFileType) != "docx" && strtolower($imageFileType) != "pdf" ) {
		    $uploadOk = 0;
		}else{
		    $uploadOk = 1;	
		}
    	$boundary =md5(date('r', time())); 

    	$headers = "From: ".$_POST['name']." autoemail@netlinkph.net\r\nReply-To: ". $_POST['email'] . "\r\n";
    	$headers .= 'Cc: ' . $_POST['email'];
    	$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

    	$message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";
	if($uploadOk > 0){
    	mail($to, $subject, $message, $headers);
    	echo '<script>alert("Thank you for your email. We will contact you soon ~."); window.location.href = "careers";</script>';
    }else{
    	echo '<script>alert("Sorry DOC, DOCX or PDF file only."); window.location.href = "careers";</script>';
    }
}
?>