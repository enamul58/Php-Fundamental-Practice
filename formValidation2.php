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
			<form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
					<table>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name"/></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td><input type="text" name="email"/></td>
						</tr>
						<tr>
							<td>Website</td>
							<td><input type="text" name="website"/></td>
						</tr>
						<tr>
						   <td>Comment</td>
						   <td><textarea name="comment" rows="5" cols="40"></textarea></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>
								<input type="radio" name="gender" value="meal">Meal
								<input type="radio" name="gender" value="femeal">Femeal
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="submit" /></td>
						</tr>
					</table>
				</form>
				<?php
				
					$name=$website=$email=$gender=$comment="";
					if( $_SERVER["REQUEST_METHOD"] == "POST" ){
						$name    = validat($_POST["name"]);
						$email   = validat($_POST["email"]);
						$website = validat($_POST["website"]);
						$comment = validat($_POST["comment"]);
						$gender  = validat($_POST["gender"]);
						
						echo "Name: ".$name."<br/>";					
						echo "E-mail: ".$email."<br/>";					
						echo "Website: ".$website."<br/>";					
						echo "Comment: ".$comment."<br/>";					
						echo "Gender: ".$gender;					
						
					}
					function validat($date){
						$date = stripcslashes($date);
						$date = trim($date);
						$date = htmlspecialchars($date);
						return $date;
					}
					
					
					
				?>
				
				
				
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>