<?php
if(!isset($_REQUEST['id']))
{
  header('location:a_oop3.php');
}
else
{
   require_once('config.php');
    $id=$_REQUEST['id'];
   }
?>


<?php
  
 if(isset($_POST['submit']))
{
    
    try{

         $name=$_POST['name'];
         $dept=$_POST['dept'];
         $roll=$_POST['roll'];
         $session=$_POST['session'];

          $statement1=$db->prepare("update tbl_profile set s_name=?,s_dept=?,s_roll=?,s_session=? where s_id=?");
		   $statement1->execute(array($name,$dept,$roll,$session,$id));

    }catch(Exception $e)
	{
		$error_message1=$e->getMessage();
	}

  }



?>



<html>
<head>
<style text="type/css">
 .profile{
 	width:280px;
 	
 	padding:10px;
 	padding-left:25px;
 	margin-left:500px;
 	margin-top:50px;
    border:1px solid #abc;
    border-radius:3px;
  	box-shadow:  0px 10px 15px rgba(0, 0, 0, 0.2);
 }

  .show{
    
    width:550px;
  	padding:10px;
 	padding-left:25px;
 	margin-left:360px;
 	margin-top:50px;
    border:1px solid #abc;
    border-radius:3px;
  	box-shadow:  0px 10px 15px rgba(0, 0, 0, 0.2);
  }

  table tr td{
  	text-align:center;
  }



</style>



</head>
<body >
<div class="profile">

<?php 
  $statement=$db->prepare("select * from tbl_profile where s_id=?");
  $statement->execute(array($id));
  $result=$statement->fetchAll(PDO::FETCH_ASSOC);
  foreach($result as $row)
  {

  ?>


<form  method="post">
<h4>Your Profile</h4>
<table>
<tr>
<td>Name:</td><td><input type="text" name="name" value="<?php echo $row['s_name']; ?>" required></td>
</tr>
<tr>
<td>Depertment:</td><td><input type="text" name="dept" value="<?php echo $row['s_dept']; ?>"  required></td>
</tr>
<tr>
<td>Roll:</td><td><input type="text" name="roll" value="<?php echo $row['s_roll']; ?>" required></td>
</tr>
<td>Session:</td><td><input type="text" name="session" value="<?php echo $row['s_session']; ?>"  required></td></tr>
<tr><td></td><td style="text-align:right"><br><input type="submit" name="submit" value="Submit"></td></tr>
</table>
</form>

<?php
}
?>

<br>
<a href="showall.php">ShowAll</a>
<br><br>
</div>
</body>
</html>
