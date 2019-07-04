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
					
					//Indexed arrays
					$ary = array(5, 3, 9, 10, 15);
					$length = count($ary);
					for( $i=0; $i<$length; $i++){
						echo $ary[$i];
						echo "<br/>";
					}
					//Associative arrays 
					$ages = array("Rahim" => "25", "karim" => "20", "mim" => "27");
					foreach( $ages as $x => $age ){
						echo $x." ".$age;
						echo "<br/>";
					}
					//multidimotional array
					$cars = array(
							array("BMW", 15, 20),
							array("Mazda", 20, 40),
							array("Audi", 23, 35),
							array("saad", 24, 40)
					);
					for( $i=0; $i<4; $i++){
						echo "<p>Row Number $i</p>";
						echo "<ul>";
							   for($j=0; $j<3; $j++){
								   echo "<li>".$cars[$i][$j]."</li>";
							   }
						   "</ul>";
					}
					
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>