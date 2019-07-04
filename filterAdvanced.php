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
					$intNum = 100; 
					$min = 1;
					$max = 200;
					if (filter_var($intNum,FILTER_VALIDATE_INT,array("options" => array("min_range" => $min,"max_range" => $max)))){
						echo "num is valid";
					}
					else{
						echo "num is not valid";
					}
					echo"<br/>";
					
					$url = "http://www.trainingwithliveproject.com/index.html?q=123";
					if( filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
					   echo "this url is valid";
					}else{
						echo "this url is not query string";
					}
					
					
					
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>