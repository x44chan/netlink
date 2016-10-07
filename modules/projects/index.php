<div class="container">
	<div class="row">
		<div class="col-xs-12" align="left">
			<h4 style="font-size: 15px;"><u><b><span class="icon-stack"></span> RECENT PROJECTS</b></u></h4>
		</div>
	</div>
	<div style="border: 1px solid #eee; padding: 10px; border-radius: 5px; height: calc(100%);" >
		<div class="row">
			<?php
				$projects = "SELECT * FROM projects ORDER BY date DESC";
				$projects = $conn->query($projects);
				if($projects->num_rows > 0){
					while ($row = $projects->fetch_object()) {
			?>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<div class="ih-item square colored effect3 bottom_to_top" id = "ih" style = "border: 1px solid; border-radius: 5px;">
	                <a href="projects/view/<?php echo $row->projects_id;?>">
	                    <div class="img">
	                        <img src="<?php echo $row->thumbnail;?>" alt="<?php echo $row->title;?>">
	                    </div>
	                    <div class="info">
	                        <h3><?php echo $row->title;?></h3>
	                        <p><?php echo substr($row->caption, 0, 60);?>....</p>
	                    </div>
	                </a>
	            </div>
	            <br class="visible-xs">
			</div>
			<?php
					}
				}
			?>
		</div>
	</div>
</div>