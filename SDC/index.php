<!DOCTYPE html>
<html>
<head>
    <title>SDC Projetc</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
</head>
<body>
    <div class="container">
        <header>
            <div id="logo"><a href="#"><img src="images/banner.jpg" /></a></div>
            <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
            </ul>
            <div class="clear"></div>
        </header>

        <section class="main_body">
            <div id="welcome">
            <h2>Ingenuity Technologies Ltd assigment</h2>
            <p>The SDC has software developers on staffs(Programmers, Software Analysts) and several Projects are to be developed for his customers.
                It means that each developer can be involved in the development of one projetc or several projects. One project can be developed by one or several developer(s).</p>
            </div>
            
            <div id="leftdiv"><h2>Add Staffs and Proyects</h2>
            	<?php 
            	include('Controller/error.php')
            	?>
            	<div class="form_input">
	            	<form method="post" action="index.php">
	            			<label>Staffs</label>
	            			<div><input type="text" name="title" placeholder="Mr/Mrs"/><br></div>
	            			<div><input type="text" name="fname" placeholder="First name"/><br></div>
	            			<div><input type="text" name="lname" placeholder="Last name"/><br></div>
	            			<div><input type="text" name="position" placeholder="Position"/><br></div>
	            			<div><button type="submit" name="Submit_S">Add</button></div>
	            	</form >
            	</div>
            	<div class="form_input2">
	            	<form method="post" action="index.php">
	            			<label>Projects</label>
	            			<div><input type="text" name="pname" placeholder="Proyect Name"/><br></div>
	            			<div><button type="submit" name="Submit_P">Add</button></div>
	            	</form>
            	</div>
            	
            </div>
            <div id="rightdiv"><h2>Assign for development</h2>
            	<form method="post" action="index.php">
            		<div class="form_input">
	            		<div><select name="s_staff" onchange="this.form.Submit()">
	            			<?php
	            			include('Controller/liststaff.php')
	            			?>
	            		</select></div>
	            		
	            		<div>
		            		<select name="proj" onchange="this.form.Submit()">
		            			<?php include('Controller/listproject.php')?>
		            		</select>
            			</div>	            
            			<?php
	            			include('Controller/assign.php')
	            			?>			
	            			<div><button type="submit" name="Projects">Assign</button></div>
	            			
            			</div>
            			<div id="msg"><label>Select Staff and click projects associated</label>
		            <div><button type="submit" name="associated" onclick="this.form.action='Views/info.php'">Project Associated</button></div>
		            </div>
	            				
            	</form>
            	
            </div>
        </section>
        <div class="clear"></div>

        <section>
            <div></div>
        </section>



        <footer>Copyright Rohe</footer>
    </div>
</body>
</html>
