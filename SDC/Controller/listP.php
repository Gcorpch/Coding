<?php 
		$link = mysqli_connect("127.0.0.1", "root", "", "sdc");
		if($link){
			$name = $_POST['s_staff'];
			$result = mysqli_query($link, "SELECT p_name FROM sdc_manage LEFT OUTER JOIN staff ON sdc_manage.s_id = staff.s_id RIGHT OUTER JOIN project ON sdc_manage.p_id = project.p_id WHERE staff.s_fisrt_name = '$name' ;");
			if($result){
				while ($row = mysqli_fetch_assoc($result)) {
					?><tr><td><?php echo $row['p_name'];?></td></tr><?php
				}
			}
			mysqli_close($link);
		}
?>