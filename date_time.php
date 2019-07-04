<html>
	<head>
		<style>
			.php_coding{ width:900px; margin: 0 auto; background:#ddd;}
			.headeroption, .footeroption{ background:#444;color:#fff;padding:20px;text-align:center;}
			.maincontent{ min-height: 400px; padding: 20px;}
			.headeroption h2, .footeroption h2{ margin:0;}
			 p{margin:0}
		</style>
	</head>
	<body>
		<div class="php_coding">
			<section class="headeroption">
				<h2>php Fundamentals Training</h2>
			</section>
			<section class="maincontent">
			
			   <span style="float:right">
			      <?php
					date_default_timezone_set('Asia/Dhaka');
					echo "Time: ".date("h:i:sa");
					?>
			   </span>
			   <?php
			   echo "Today is ".date("d-m-Y")."<br/>";
			   echo "Today is ".date("l")."<br/>";
			   echo "present time".date("h:i:sa")."<br/>";
			   date_default_timezone_set('Asia/Dhaka');
			   echo "Bangladesh time is ".date("h:i:sa")."<br/>";
			   echo date_default_timezone_get();
			   
			  ?>
			</section>
			<section class="footeroption">
				<p>&copy; <?php echo date("Y")?> training with live project</p>
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>