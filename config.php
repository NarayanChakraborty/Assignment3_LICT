<!---Author Sree Narayan Chakraborty
     ASH1201002M, CSTE 7th Batch, NSTU-->

<?php
$dbhost="localhost";
$dbname="studentprofile";
$dbuser="root";
$dbpass="";

try{
 $db=new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
 $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
    echo "Connection Error".$e->getMessage();
	}
?>