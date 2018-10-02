<?php 
		$link = mysqli_connect("127.0.0.1", "root", "", "sdc");
		$result = mysqli_query($link, "SELECT * FROM staff;");
		if($result){
			while ($row = mysqli_fetch_assoc($result)) {
				?><option name="<?php echo $row['s_fisrt_name']?>"><?php echo $row['s_fisrt_name'];?></option><?php
			}
		}
		mysqli_close($link);
		
?>