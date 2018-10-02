<?php
if (isset($_POST['s_staff'])) {
	if(isset($_POST['proj'])){
		$link = mysqli_connect("127.0.0.1", "root", "", "sdc");
			if($link)
			{
				$sname = $_POST['s_staff'];
				$pname = $_POST['proj'];
				$sql = "INSERT INTO sdc_manage(s_id,p_id) SELECT staff.s_id,project.p_id FROM staff JOIN project WHERE staff.s_fisrt_name ='$sname' AND project.p_name = '$pname';";
				mysqli_query($link, $sql);
				mysqli_close($link);
			}
	}	
}

?>