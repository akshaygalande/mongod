<?php
   // connect to mongodb
   $m = new MongoClient();
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->sportsfi;
	
   echo "Database mydb selected";
?>