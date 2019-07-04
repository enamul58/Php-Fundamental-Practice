<?php
	
?>





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
					$cookieName="user";
					$cookieValue="Md.enamul";
					setcookie( $cookieName, $cookieValue, time() + (86400*30), "/" );
					if(!isset($_COOKIE[$cookieName])){
						echo "you cookie $cookieName is not set";
					}
					else{
						echo "you cookie $cookieName is set<br>";
						echo "you cookie $cookieName value is: $cookieValue ";
					}
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>