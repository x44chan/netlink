        </div>
		<footer class="footer animated bounceIn" id = "xchan" style = "display: none;">
            <div style="width: 100%; background-color: #2C3E50; height: 2px;"></div>
            <div class="container-fluid">                
    			<div class="row">
    				<div class = "col-xs-12 col-md-6" style="margin-top: 5px;" align="center">
    					<p style="font-size: 16px;"><b>LOCATION</b></p>
    					<i><p># 812 Maczen Space, Brgy. Labuin <br>Pila, Laguna</p></i>
    				</div>
    				<div class = "col-xs-12 col-md-6" style="margin-top: 5px;" align="center">
    					<p style="font-size: 16px;"><b>ABOUT</b></p>
    					<i><p>Your Total I.T. Provider</p></i>
    				</div>
    			</div>
    			<div align="center" class="copyrights">
    				<p><i>Netlink Advance Solutions, Inc. (<?php echo date("Y")?>)</i></p>
    			</div>
            </div>
   		</footer>	
	</body>
</html>
<script src='css/animate/css3-animate-it.js'></script>

<script>
$(document).ready(function(){
    $.doTimeout(2500, function(){
        $('.repeat.go').removeClass('go');

        return true;
    });
    $.doTimeout(2520, function(){
        $('.repeat').addClass('go');
        return true;
    });
    
});

</script>
