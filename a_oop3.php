<?php
include_once('config.php');
?>

<?php
  
 if(isset($_POST['submit']))
{
    
    try{

         $name=$_POST['name'];
         $dept=$_POST['dept'];
         $roll=$_POST['roll'];
         $session=$_POST['session'];

          $statement1=$db->prepare("insert into tbl_profile(s_name,s_dept,s_roll,s_session) values(?,?,?,?)");
		   $statement1->execute(array($name,$dept,$roll,$session));

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
<form  method="post">
<h4>Your Profile</h4>
<table>
<tr>
<td>Name:</td><td><input type="text" name="name" required></td>
</tr>
<tr>
<td>Depertment:</td><td><input type="text" name="dept" required></td>
</tr>
<tr>
<td>Roll:</td><td><input type="text" name="roll" required></td>
</tr>
<td>Session:</td><td><input type="text" name="session" required></td></tr>
<tr><td></td><td style="text-align:right"><br><input type="submit" name="submit" value="Submit"></td></tr>
</table>
</form>
<br>
<a href="showall.php">ShowAll</a>
<br><br>
</div>




<div class="show">
<table>
<tr>
    <th width="5%">Serial</th>
	<th width="50%">Student Name</th>
	<th width="45%">Action</th>
</tr>

<?php
$i=0;
$statement=$db->prepare("select * from tbl_profile order by s_name asc");
$statement->execute();
$result=$statement->fetchAll(PDO::FETCH_ASSOC); 
if($result==null)
{
	 echo "No Entry"; 
	
}
foreach($result as $row)
{

 $i++;
 ?>
 

<tr>
    <td><?php echo $i; ?></td>
    <td>
	<?php echo $row['s_name'];?>
	</td>
	<td>
	<a href="showall.php?id=<?php echo $row['s_id'];?>" >View</a>
	<a href="edit.php?id=<?php echo $row['s_id']; ?>" >Edit</a>
	<a href="delete.php?id=<?php echo $row['s_id'];?>" >Delete</a>
	</td>
</tr>
<?php
}

?>

</table>
</div>
</body>
</html>


