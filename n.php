<?php
include("config.php");
   error_reporting(0);
if(isset($_POST['submit'])&& ($_POST['submit'] =='submit'))
{

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];

if(empty($firstname))
{

	$strMsg[] = "please enter first name";
}
if(empty($lastname))
{

	$strMsg[] = "please enter last name";
}

if(empty($email))
{

	$strMsg[] = "please enter email";
}

if(empty($contact))
{

	$strMsg[] = "please enter mobile no";
}

if(empty($address))
{

	$strMsg[] = "please enter address";
}
 if(empty($strMsg))
            {
$sqlInsert = "INSERT INTO enquire VALUES ('".$firstname."','".$lastname."','".$email."','".$contact."','".$address."')";
$sqlInserted = mysql_query($sqlInsert);
$sucess[] = "thank you!!!!";
}
}
?>
<html>
<head>
	<title>abc</title>
</head>
<body>
	<form method="Post">
		<?php
                            foreach($strMsg as $v)
                            {
                      ?>
                      <div class="alert alert-info">
                        <?php echo $v;?>
                       </div>
                      <?php
                            }
                      ?>
		 FirstName
		 <br>
		 <input type="text" value="" name="firstname">
		 <br>
		 lastName
		 <br>
		 <input type="text" value="" name="lastname">
		 <br>
		 Email
		 <br>
		 <input type="email" value="" name="email">
		 <br>
		 contact
		 <br>
		 <input type="number" value="" name="contact">
		 <br>
		 address
		 <br>
		 <input type="text" value="" name="address">

		<input type="submit" name="submit" value="submit">
		</form>
	</body>
	</html>