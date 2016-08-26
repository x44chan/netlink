<div class="container">
    <div class="row">
    	<div class="col-xs-12">
    		<h4><u><span class="icon-clipboard"></span> Our Services</u></h4>
            <hr>
    	</div>
    	<div class="col-xs-12" align="center">
    		Netlink Advance Solutions, Inc. has been committed to offer advance technology innovation rendering highly skilled technicians<br>
            and resources to perform cost-efficient, reliable IT Services and after sales support that satisfies and exceeds our customer's needs.
            <hr>
    	</div>
    </div>    
    <div class="row">
    <?php
        $services = "SELECT * FROM services ORDER BY services_id";
        $reserv = $conn->query($services);
        if($reserv->num_rows > 0){
            while ($row = $reserv->fetch_object()) {
    ?>
        <div class="col-xs-12 <?php if($row->col == "0"){ echo 'col-sm-6'; }?>" style = "padding-left: 3px !important; padding-right: 3px !important;">
            <div class="ih-item square colored effect3 bottom_to_top" id = "ih">
                <a href="services/view/<?php echo $row->services_id;?>">
                    <div class="img">
                        <img src="img/services/<?php echo $row->img;?>" alt="<?php echo $row->header;?>">
                    </div>
                    <div class="info">
                        <h3><?php echo $row->header;?></h3>
                        <p><?php echo substr($row->descr, 0, 90);?>....</p>
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