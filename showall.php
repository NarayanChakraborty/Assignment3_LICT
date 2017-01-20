<html>
<head>
<style text="type/css">
 .view{
 	width:280px;
 	
 	padding:10px;
 	padding-left:25px;
 	margin-left:500px;
 	margin-top:50px;
    border:1px solid #abc;
    border-radius:3px;
  	box-shadow:  0px 10px 15px rgba(0, 0, 0, 0.2);
 }

 </style>

</head>
<body>




<?php
if(!isset($_REQUEST['id']))
{
	header('location:a_oop3.php');
}
else
{
	 require_once('config.php');
	 $id=$_REQUEST['id'];
	 
	 //To unlink image
	 ?>
	   <div class="view">
	   <?php
	 $statement1=$db->prepare("select * from tbl_profile where s_id=?");
	$statement1->execute(array($id));
	$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
	foreach($result1 as $row1)
		{
			
			?>
             
               <h4>Name:<?php echo $row1['s_name']; ?></h4>
                <h5>Department:<?php echo $row1['s_dept'] ; ?></h5>
               <h5>Roll:<?php echo $row1['s_roll']; ?></h5>          
               <h5>Session:<?php echo $row1['s_session']; ?> </h5>
             

			<?php
		}
	
	 //$success_msg2="Category has been successfully Deleted";
	 //echo ""
	 //header('location:viewpost.php');
 }
?>
<br>
<a href="showall.php">ShowAll</a>
<br><br>
  </div>
</body>
</html>