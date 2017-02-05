<?php
   $dbhost = 'localhost';
   $dbuser = 'ss6k';
   $dbpass = 'mthack2017';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT LastName, FirstName, userID FROM Student';
   mysql_select_db('ss6k');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Last Name :{$row['LastName']}  <br> ".
         "First Name : {$row['FirstName']} <br> ".
         "Pipeline ID : {$row['userID']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>