<!--note for login username=p1 password=neha-->
<?php
        include("config.php");
        session_start();
        ob_start();
        error_reporting(0);
        if(isset($_POST["continue"]) && ($_POST["continue"] == "Continue"))
        {
          //echo "*";
          $patientid = mysql_real_escape_string(trim($_POST["pId"]));
          $pass = mysql_real_escape_string(trim($_POST["pass"]));
          if(empty($patientid))
          {
            $strMsg[] = "Please enter Username";
          }
          if(empty($pass))
          {
            $strMsg[] = "Please enter password";
          }
          if(empty($strMsg))
          {
                $sqlSelect = "SELECT * FROM tbl_hos WHERE patientid='".$patientid."' AND password='".$pass."'";
                $sqlSelected = mysql_query($sqlSelect);
                $rowCount = mysql_num_rows($sqlSelected);
                while($data = mysql_fetch_assoc($sqlSelected))
                {
                    
                    $_SESSION["patientId"] = $data["patientid"];
                    $_SESSION["password"] = $data["password"];
                }
                if($rowCount > 0)
                {
                    header("location:main.php");
                }
                else
                {
                  $strMsg[]= "Invalid username and password";
                }
          }
        }

?>
                        
        
</html>
<html>
<head>
	<title>login form</title>
<style>
.form1{
border:1px solid black;
border-color: red;
height: 200px;
width: 250px;
/*background-color: blue;*/
margin-left: 500px;
margin-top: 100px;
padding-top: 30px;
padding-left: 20px;
}
</style>
</head>
<body>
	<form method="Post">
		<div class="form1">
			<?php 
      foreach($strMsg as $error)
      	{ 
      		?>
                     <tr class="error">
                     <td></td>
                     <td><?php echo $error;?></td>
                     </tr>
                     <?php
                      }

                      ?>
			<h4>Please enter your login Information</h4>
			
       Patient Id <input type="text" name="pId" value="" placeholder="enter patient id"><br><br>
       Password <input type="password" name="pass" value="" password="enter password"><br><br>
       <input type="radio" name="r1" value="patient">patient
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="submit" value="Continue" name="continue">

    </div>
    
	</form>
</body>
</html>
