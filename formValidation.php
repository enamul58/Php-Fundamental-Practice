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
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> ">
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
									<input type="radio" name="gender" value="male"/>Male				
									<input type="radio" name="gender" value="female"/>Female
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="submit"/></td>				
						</tr>
					</table>
				</form>
				<?php
						
						
						$name = $email = $website = $comment = $gender="";
				     if($_SERVER["REQUEST_METHOD"]=="POST"){
						$name    = validate($_POST["name"]);
						$email   = validate($_POST["email"]);
						$website = validate($_POST["website"]);
						$comment = validate($_POST["comment"]);
						$gender  = validate($_POST["gender"]);
						
						echo "Name: ".$name."<br/>";
						echo "email: ".$email."<br/>";
						echo "website: ".$website."<br/>";
						echo "comment ".$comment."<br/>";
						echo "gender: ".$gender;	
					 }
					 function validate($data){
							$data = trim($data);
							$data = stripcslashes($data);
							$data = htmlspecialchars($data);
							return $data;
							
					 }
					 
				?>
				
				
			</section>
			<section class="footeroption">
				<h2> <?php echo"www.trainingwithliveproject.com"; ?> </h2>
			</section>
		</div>
	</body
</html>