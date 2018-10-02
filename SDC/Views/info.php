<!DOCTYPE html>
<html>
<head>
    <title>SDC Projetc</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../styles/main.css" />
</head>
<body>
    <div class="container">
        <header>
            <div id="logo"><a href="#"><img src="../images/banner.jpg" /></a></div>
            <ul class="nav_menu">
                <li><a href="../index.php">Home</a></li>
            </ul>
            <div class="clear"></div>
        </header>

        <section class="main_body">
            <div id="welcome">
            <h2>Ingenuity Technologies Ltd assigment</h2>
            <table border="1">
            	<tr><th>Proyects where <?php echo $_POST['s_staff']?> is involved</th></tr>
            	<?php include('../Controller/listP.php');?>
            </table>
            </div>
            
        </section>
        <div class="clear"></div>

        <footer>Copyright Rohe</footer>
    </div>
    
</body>
</html>
