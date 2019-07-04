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
			
					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
						Username: <input type="text" name="username"/>
						<input type="submit" value="submit"/>
					</form>
					<?php
						if($_SERVER["REQUEST_METHOD"]=="POST"){
							$name = $_REQUEST['username'];
						}
						if( empty($name)){
							echo "<span style='color:red'>UserName field musat not be empty</span>";
						}else{
							echo "<span style='color:green'> you have submitted: ". $name."</span>";
						}
					
					?>
				
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>