<?php
    $service_id = mysqli_real_escape_string($conn, $_GET['view']);
    $services = "SELECT * FROM services where services_id = '$service_id' ORDER BY services_id";
    $reserv = $conn->query($services);
    if($reserv->num_rows > 0){
        $row = $reserv->fetch_object();
?>
<script type="text/javascript">
    document.title = "Service: <?php echo $row->header; ?>"; 
</script>
<div class="container">
    <div class="row">
    	<div class="col-xs-12">
    		<h4>
                <u><span class="icon-clipboard"></span> <?php echo $row->header;?> </u>
                <a href = "javascript:javascript:history.go(-1)" class="btn btn-danger btn-sm pull-right" style = "margin-top: -3px;" data-toggle="tooltip" title="Back"><span class = " icon-arrow-left"></span></a>
                <br><br>
            </h4> 
    	</div>
        <div class="col-xs-12">
            <p>
<?php
    $contents = "SELECT * FROM contents where services_id = '$service_id' order by header asc";
    $reco = $conn->query($contents);
    if($reco->num_rows > 0){
        $align = array("right","left");
        $align = $align[array_rand($align)];
        while($rowx = $reco->fetch_object()){
            if($rowx->header == ""){
?>
                <img align="<?php echo $align;?>" style = "padding: 0px 5px 0px 5px;" id = "xd" class = "img-responsive" src = "img/services/content/<?php echo $rowx->img;?>" />
                <?php echo $row->descr;?><br><br>
                <?php echo $rowx->descr;?>
            </p>
        </div>
<?php
            }else{
?>
        <div class="col-xs-12">
            <hr>
            <h4><u><span class="icon-clipboard"></span> <?php echo $rowx->header;?> </u></h4>
            <p>
                <img align="<?php echo $align;?>" style = "padding: 0px 5px 0px 5px;" class = "img-responsive" src = "img/services/content/<?php echo $rowx->img;?>" />
                <?php echo $rowx->descr; ?>
            </p>
        </div>
<?php
            }
            if($align == "right"){
                $align = "left";
            }else{
                $align = "right";
            }
            
        }
    }else{
        echo '<img align="left" style = "border-radius: 100px;" class = "img-responsive" src = "img/services/'. $row->img . '" /> '. $row->descr . ' </p></div>';
    }
?>
    </div>    
    <div class="row">
        <div class="col-xs-12" align="center">
            <hr>
            <h4><span class = "icon-notification"></span> Need Help ? </h4><br>
            <button class="btn btn-sm btn-success"><span class = "icon-phone"></span> Call Us Now! </button>
            <a class="btn btn-sm btn-success" href = "contact"><span class = "icon-mail2"></span> Email Us </a>
        </div>
    </div>
</div>
<?php
    }
?>