<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>positive negative number</title>
</head>
<body>
    <?php 
    
	if($_POST)
	{
		//get the post value from form
		$numbers = $_POST['numbers'];
		
		if($numbers != ''){
			//separate the numbers and make into array
			$numArray = explode(',', $numbers);
			
			//now this array has both positive and negative integers
			//let's separate it
			foreach($numArray as $num){
				if($num > 0){
					$positiveArr[] = $num;
				}else{
					$negativeArr[] = $num;
				}
			}
 
			print "Positive Values: ". print_r($positiveArr,true)."<br>";
			print "Negative Values: ". print_r($negativeArr,true);
		}
	}
 
    ?>
</body>
</html>