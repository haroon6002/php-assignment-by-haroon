<?php
    $c = mysqli_connect("localhost","root","","inventory");
	
	    if(!$c){
			
			die("not connected then Failed".mysqli_connect_error());
		}
		mysqli_set_charset($c,"utf8");
?>