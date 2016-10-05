<?php
	if(isset($_GET['module']) && $_GET['module'] == 'careers'){
?>
<script type="text/javascript">
	function apply(str) {
	   if (window.XMLHttpRequest) {
	        // code for IE7+, Firefox, Chrome, Opera, Safari
	        xmlhttp = new XMLHttpRequest();
	    } else {
	        // code for IE6, IE5
	        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	    }
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	            document.getElementById("apply").innerHTML = xmlhttp.responseText;
	        }
	    };
	    xmlhttp.open("GET","ajax/ajaxowner.php?apply="+str,true);
	    xmlhttp.send();	
	    $("#apply").modal();	
	}
</script>
<?php
	}
?>