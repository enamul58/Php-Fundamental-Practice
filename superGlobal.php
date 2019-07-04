<html>
	<head>
		<style>
			.php_coding{ width:900px; margin: 0 auto; background:#ddd;}
			.headeroption, .footeroption{ background:#444;color:#fff;padding:20px;text-align:center;}
			.maincontent{ min-height: 400px; padding: 20px;}
			.headeroption h2, .footeroption h2{ margin:0;}
		</style>
	</head>
	<body>
		<div class="php_coding">
			<section class="headeroption">
				<h2>php Fundamentals Training</h2>
			</section>
			<section class="maincontent">
				<?php
					//Globals
					$x=10;
					$y=2;
					function sum(){
					  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
					}
					sum();
					echo $z;
					
					//$_Server
					echo "<br/>";
					echo $_SERVER['PHP_SELF'];
					echo "<br/>";
					echo $_SERVER['SERVER_NAME'];
					echo "<br/>";
					echo $_SERVER['HTTP_USER_AGENT'];
					echo "<br/>";
					echo $_SERVER['SERVER_ADDR'];
					echo "<br/>";
					echo $_SERVER['SCRIPT_NAME'];
					
					
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>