<?php



// $sum = 0;
// $str = '';
// for($i = 1; $i<=10; $i++) {
//     $sum = $sum + $i;
//     $str .= $i == 10 ? $i." = " : $i." + ";
// }
// echo $str.$sum;


// echo "<br>";

// function len($a){ 
// 	for ($i=0; $a[$i] != "" ; $i++);
// 	return $i;
// }
	
// 	 function rev_mystr($w)
// 	 {
	 	
// 	 	$g=len($w);
	    
// 	 	for ($i=$g; $i >= 0 ; $i--) { 
// 	 	 $l .= $w[$i];
	 	 
// 	 	}
// 	 	return $l."   ".count($w);
// 	 }

// echo rev_mystr("Huzaifa zafar");





if (isset($_REQUEST['btn_sub'])) {
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$name1 = validate1($_POST["name"]);
	$lastname1 = validate1($_POST["lastname"]);
	$phone1 = validate1($_POST["phone"]);
	$gender1 = validate1($_POST["gender"]);

	echo $name1;
		if (empty($name1)) {
			$msg_value1 = 'Please fill out name field.';
		}
		if (empty($lastname1)) {
			$msg_value2 = 'Please fill out lname field.';
		}
		if (empty($phone1)) {
			$msg_value3 = 'Please fill out phone field.';
		}
		if (empty($gender1)) {
			$msg_value4 = 'Please select out this field.';
		}
		
}


function validate1($value1)
	{
		$value1 = trim($value1);
		$value1 = htmlspecialchars($value1);
		return  $value1;
	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<br><br><br>
  <h2>Form Validation</h2>
  <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p>
  <form method="post" action="index2.php" class="was-validated1">
    
    <div class="form-group">
      <label for="uname">name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class=""style="color: red" ><?php echo $msg_value1 ?></div>
    </div>

     <div class="form-group">
      <label for="uname">last name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="lastname" required>
      <div class="valid-feedback">Valid.</div>
      <div class=""style="color: red" ><?php echo $msg_value2 ?></div>
    </div>

     <div class="form-group">
      <label for="uname">phone:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="phone" required>
      <div class="valid-feedback">Valid.</div>
      <div class=""style="color: red" ><?php echo $msg_value3 ?></div>
    </div>

    <div class="form-group">
      <label for="pwd">gender:</label>
      <select  class="form-control"  name="gender" required>
      	<option></option>
      	<option>male</option>
      	<option>female</option>
      </select> 
      <div class="valid-feedback">Valid.</div>
      <div class=""style="color: red" ><?php echo $msg_value4 ?></div>
    </div>

    

    <button type="submit" name="btn_sub" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
