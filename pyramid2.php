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
					function pypart($n){
						$space = $n;
						for($i = 0; $i <= $n; $i++){
							for( $k=0; $k < $space; $k++ ){
								echo "&nbsp";
							}
							for( $j = 0; $j < 2*$i -1; $j++){
								echo "*";
							}
							echo "<br/>";
							$space--;
						}
					}
					$n = 5;
					pypart($n);
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>