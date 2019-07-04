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
					$creatfile = fopen("new.txt","w") or die("file not found");
					$one = "Md. Enamul Haque Sarker";
					$two = "Md. Enamul Haque Sarker\n";
					$three = "Md. Enamul Haque Sarker\n";
					 fwrite($creatfile, $one);
					 fwrite($creatfile, $two);
					 fwrite($creatfile, $three);
					 fclose($creatfile);
					
				?>
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>