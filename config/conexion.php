<?php
	/*-------------------------
	
	---------------------------*/
	# conectare la base de datos
    $con=@mysqli_connect(iplus.com.ec, ipluscom_cloud, *&Cloud/computing0017, ipluscom_cloud);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
