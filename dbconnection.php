<?php
	
	class dbconnect 
	{
		
		function construct()
		{
			$connection = mysqli_connect("localhost" , "root" , "" , "2dbms");
			return $connection;
			
			
			
		}

		
	}
	//print $connection;
?>