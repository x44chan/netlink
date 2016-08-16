<?php
	$page = array(
				"completed" => "Completed Projects",
				"ongoing" => "Ongoing Projects",
				"careers" => "Careers - Join Us",
				);
	$title = "Main Page";
	foreach($page as $x => $tag) {
	    if(isset($_GET['action']) && $_GET['action'] == $x){
			$title = $tag;
	    }elseif(isset($_GET['module']) && $_GET['module'] == $x){
			$title = $tag;
	    }
	}
?>