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
			   <table>
					<tr>
						<td>Filter Name</td>
						<td>Filter Id</td>
					</tr>
					<?php
						foreach( filter_list() as $id => $filter ){
							 echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
						}
						
						 $str = "<h2>i am learn php </h2>";
						 $newstr = filter_var($str, FILTER_SANITIZE_STRING);
						 echo $newstr;
						
						 $int = 50.6;
						if(filter_var($int, FILTER_VALIDATE_INT)){
							echo "integer ";
						}
						else{
							
							echo "<br>not integer ";
						}
						
					?>
			   </table
			
				
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>