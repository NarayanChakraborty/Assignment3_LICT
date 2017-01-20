<?php
if(!isset($_REQUEST['id']))
{
	header('location:a_oop3.php');
}
else
{	 $id=$_REQUEST['id'];
	 
	 //To unlink image
	

	 $statement=$db->prepare("delete from tbl_profile where s_id=?");
	 $statement->execute(array($id));
	 //$success_msg2="Category has been successfully Deleted";
	 //echo ""
	 header('location:a_oop3.php');
 }
?>