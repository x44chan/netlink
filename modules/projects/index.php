<div class="container">
	<div class="row">
		<div class="col-xs-12" align="left">
			<h4 style="font-size: 15px;"><u><b><span class="icon-stack"></span> RECENT PROJECTS</b></u></h4>
		</div>
	</div>
	<div style="border: 1px solid #eee; padding: 10px; border-radius: 5px; height: calc(100%);" >
		<div class="row" align="center">
			<?php
				$projects = "SELECT * FROM projects ORDER BY date DESC";
				$projects = $conn->query($projects);
				if($projects->num_rows > 0){
					while ($row = $projects->fetch_object()) {
			?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href = "projects/view/<?php echo $row->projects_id;?>" id = "projects">
					<img src="<?php echo $row->thumbnail;?>" class = "img-rounded" style="border: 1px solid !important; height: 200px; width: 250px;"><br>
					<b><?php echo $row->title; ?></b> 
				</a><br>
				<?php echo substr($row->caption, 0, 92); ?>....
				<hr>
			</div>
			<?php
					}
				}
			?>
		</div>
	</div>
</div>