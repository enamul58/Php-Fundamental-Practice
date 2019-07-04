<html>
<head>
<title>calcultor</title>
</head>
<body>
	<form>
		<input type="text" name="num1" placeholder="number1">
		<input type="text" name="num2" placeholder="number2">
		<select name="oparator">
			<option>None</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Multiply</option>
			<option>Divition</option>
		</select>
		<br>
		<button type="submit" name="submit"  value="submit">calculator</button>
		<p>Total Number is: </p>
	</form>
	<?php
		if( isset($_GET['submit']) ){
			$result1 = $_GET['num1'];
			$result2 = $_GET['num2'];
			$operator = $_GET['oparator'];
			switch($operator){
				case "None":
					echo "you need to select operator";
				break;
				case "Add":
					echo $result1 + $result2;
				break;
				case "Subtract":
					echo $result1 - $result2;
				break;
				case "Multiply":
					echo $result1 * $result2;
				break;
				case "Divition":
					echo $result1 / $result2;
				break;
			}
			
			
		}
	?>
	
</body>
</html>