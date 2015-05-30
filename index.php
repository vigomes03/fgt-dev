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


	$sql = "SELECT [ID],[name] FROM [vehicle].[brand] ";

	$st  = sqlsrv_query($conn, $sql);

	while( $row = sqlsrv_fetch_array( $st, SQLSRV_FETCH_ASSOC ) ){
		var_dump($row);
	}

?>
