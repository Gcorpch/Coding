<?php 
$link = "";
$error = array();
$result = "";

	if(isset($_POST['Submit_S'])){
		$title = $_POST['title'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$position = $_POST['position'];

		if(empty($title) )
			array_push($error,"You need to submit a title");
		if(empty($fname) )
			array_push($error,"First name Missing");
		if(empty($lname) )
			array_push($error,"Last name Missing");
		if(empty($position) )
			array_push($error,"Position Missing");
		
		if(count($error) == 0)
		{
			$link = mysqli_connect("127.0.0.1", "root", "", "sdc");
			if($link)
			{
				$sql = "INSERT INTO staff(s_title,s_fisrt_name,s_last_name,s_position) VALUES('$title','$fname','$lname','$position');";
				mysqli_query($link, $sql);
				mysqli_close($link);
			
			}
		}
	}
	if(isset($_POST['Submit_P'])){
		$pname = $_POST['pname'];

		if(empty($pname) )
			array_push($error,"You need to submit a name for the project");
		
		if(count($error) == 0)
		{
			$link = mysqli_connect("127.0.0.1", "root", "", "sdc");
			if($link)
			{
				$sql = "INSERT INTO project(p_name) VALUES('$pname');";
				mysqli_query($link, $sql);
				mysqli_close($link);
			}
		}
	}
	
?>