<?php
	$font = "verdana";
	$bigcolor="blue";
	$fontcolor="green"
?>


<html>
	<head>
		<style>
			 body{font-family:<?php echo $font;?>}
			.php_coding{ width:900px; margin: 0 auto; background:#ddd;}
			.headeroption, .footeroption{ background:<?php echo $bigcolor;?>;color:<?php echo 
			 fontcolor;?>;padding:20px;text-align:center;}
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
					$a = 15;
					$b = 20;
					$c = $a + $b;
					echo "Total value= ". $c;
					
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>