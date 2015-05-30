<?php

	// phpinfo();
	
		
	$connectionInfo = array( "Database"=>"fgt-db-dev",
	 "UID"=>"lokiju", "PWD"=>"GoLang12345");

	$conn = sqlsrv_connect( "r42x8255gz.database.windows.net,1433",
				 $connectionInfo);
	if ($conn < 0) {
		echo "GO";
	} else {
		echo "NO GO";
	}

?>
