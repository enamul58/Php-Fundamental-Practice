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
				//index array srot
					$word = array("z","a","k","e","i");
					sort($word);
					$length = count($word);
				     for($i=0; $i<$length; $i++){
						echo "<br/>".$word[$i]; 
					 }
					 
				//associative array sort
				echo "<br/>";
				   $ages = array("jamal"=>"37", "kamal"=>"43", "aslam"=>"35" );
				   ksort($ages);//sort with value
				   foreach( $ages as $name => $age ){
					   echo " ".$name." ".$age."<br/>";
				   }
				 
				   
				   
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>