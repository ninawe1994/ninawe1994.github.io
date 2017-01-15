<?php
include("config.php");
    error_reporting(0);
    if(isset($_POST["submit"]) && ($_POST["submit"]=="submit"))
        {
          $Gender = mysql_real_escape_string(trim($_POST["s1"]));
         
          $Race = mysql_real_escape_string(trim($_POST["c1"]));
		 /* foreach($Race as $value){
          $select[$value]=$selected;
			}*/

          $Ethinicity = mysql_real_escape_string(trim($_POST["s2"]));
          $Preferredlang = mysql_real_escape_string(trim($_POST["s3"]));
          $Homephone = mysql_real_escape_string(trim($_POST["hmph"]));
          $Cellphone = mysql_real_escape_string(trim($_POST["celph"]));
          $Email_id = mysql_real_escape_string(trim($_POST["email"]));
          $Directaddress = mysql_real_escape_string(trim($_POST["da"]));
          $Phaddress1 = mysql_real_escape_string(trim($_POST["phad1"]));
          $Phaddress2= mysql_real_escape_string(trim($_POST["phad2"]));
          $City = mysql_real_escape_string(trim($_POST["city1"]));
          $State =  mysql_real_escape_string(trim($_POST["s4"]));
          $Zip = mysql_real_escape_string(trim($_POST["zip1"]));
          $Info = mysql_real_escape_string(trim($_POST["s6"]));
          $Refer = mysql_real_escape_string(trim($_POST["s7"]));
          $Empname= mysql_real_escape_string(trim($_POST["name"]));
          $Empddress1 = mysql_real_escape_string(trim($_POST["addr1"]));
          $Empddress2= mysql_real_escape_string(trim($_POST["addr2"]));
          $Empcity = mysql_real_escape_string(trim($_POST["city2"]));
          $Empstate =  mysql_real_escape_string(trim($_POST["s8"]));
          $Empzip = mysql_real_escape_string(trim($_POST["zip2"]));

          $Emername= mysql_real_escape_string(trim($_POST["name1"]));
          $Emerddress1 = mysql_real_escape_string(trim($_POST["addr3"]));
          $Emerddress2 = mysql_real_escape_string(trim($_POST["addr4"]));
          $Emercity = mysql_real_escape_string(trim($_POST["city3"]));
          $Emerstate =  mysql_real_escape_string(trim($_POST["s9"]));
          $Emerzip = mysql_real_escape_string(trim($_POST["zip3"]));
          $Emerphone= mysql_real_escape_string(trim($_POST["homeph"]));
          $Emercell = mysql_real_escape_string(trim($_POST["cellph"]));
          $Emerwork= mysql_real_escape_string(trim($_POST["workph"]));
          $Emerrelation = mysql_real_escape_string(trim($_POST["s10"]));

         
          $pname= mysql_real_escape_string(trim($_POST["name2"]));
          $pddress1 = mysql_real_escape_string(trim($_POST["addr5"]));
          $pddress2 = mysql_real_escape_string(trim($_POST["a"]));
          $pcity = mysql_real_escape_string(trim($_POST["city4"]));
          $pstate =  mysql_real_escape_string(trim($_POST["s11"]));
          $pzip = mysql_real_escape_string(trim($_POST["zip4"]));
          $pphone= mysql_real_escape_string(trim($_POST["homeph1"]));
          $pcell = mysql_real_escape_string(trim($_POST["cellph1"]));
          $pwork= mysql_real_escape_string(trim($_POST["workph1"]));
          $prelation = mysql_real_escape_string(trim($_POST["s12"]));

 		  $mname = mysql_real_escape_string(trim($_POST["name3"]));
          $mddress1 = mysql_real_escape_string(trim($_POST["addr7"]));
          $mddress2 = mysql_real_escape_string(trim($_POST["addr8"]));
          $mcity = mysql_real_escape_string(trim($_POST["city5"]));
          $mstate =  mysql_real_escape_string(trim($_POST["s13"]));
          $mzip = mysql_real_escape_string(trim($_POST["zip5"]));
          $mphone= mysql_real_escape_string(trim($_POST["homeph2"]));
          $mcell = mysql_real_escape_string(trim($_POST["cellph2"]));
          $mwork= mysql_real_escape_string(trim($_POST["workph2"]));
          $mrelation = mysql_real_escape_string(trim($_POST["s14"]));

       
          if(empty($Gender))
          {
            $strMsg[] = "Please enter gender";
          }
          if(empty($Race))
          {
            $strMsg[] = "Please enter race";
          }
         if(empty($Ethinicity))
          {
            $strMsg[] = "Please enter ethinicity";
          }
          if(empty($Preferredlang))
          {
            $strMsg[] = "Please enter preferedlanguage";
          }
         
          if(empty($Phaddress1))
          {
            $strMsg[] = "Please enter Physical address";
          }
          
          if(empty($City))
          {
            $strMsg[] = "Please select city";
          }
           if(empty($State))
          {
            $strMsg[] = "Please select State";
          }
          if(empty($Zip))
          {
            $strMsg[] = "Please select zip";
          }

          if(empty($strMsg))
          {
            $sqlInsert1 ="INSERT INTO `demographics`(`gender`,`rac`,`ethinicity`,`preferedlanguage`,`home`,         `cell`,      `email`,    `diradd`,      `phyadd1`,     `phyadd2`,    `city`,`state`,`zip`,  `info`,  `refer`,`ename`,   `eaddr1`,      `eaddr2`,     `ecity`,   `estate`,   `ezip`,   `emname`,   `emaddr1`,     `emaddr2`,      `emcity`,   `emstate`,    `emzip`,   `emph`,    `emcell`,    `emwork`,     `emrel`,      `emername`,   `emeraddr1`,     `ad`,     `emercity`,`emerstate`,     `emerzip`,   `emerph`,    `emercell`,  `emerwork`,     `emerrel`,`nname`,`naddr1`,`naddr2`,`ncity`,`nstate`,`nzip`,`nph`,`ncell`,`nwork`,`nrel`) VALUES 
                                                    ('$Gender','$Race','$Ethinicity','$Preferredlang','$Homephone','$Cellphone','$Email_id','$Directaddress','$Phaddress1','$Phaddress2','$City','$State','$Zip','$Info','$Refer','$Empname','$Empddress1','$Empddress2','$Empcity','$Empstate','$Empzip','$Emername','$Emerddress1','$Emerddress2','$Emercity','$Emerstate','$Emerzip','$Emerphone','$Emercell','$Emerwork','$Emerrelation','$pname','$pddress1','$pddress2','$pcity','$pstate','$pzip','$pphone','$pcell','$pwork','$prelation','$mname','$mddress1','$mddress2','$mcity','$mstate','$mzip','$mphone','$mcell','$mwork','$mrelation')";        
	          $sqlInserted1 = mysql_query($sqlInsert1);
             header("location:welcome.php");
        }  
       }
?>
<html>
<head>
<title> information</title>
<style type="text/css">
td{
padding-left: 20px;
background-color: PaleGoldenRod ;

}
th{
	background-color: PaleVioletRed;
	padding-left: 110px;
	font-family:verdana;
	font-size: 12px;
}
table{
	border:20px solid Black;
	font-family:verdana;
	font-size: 12px;
}
button{
	background-color: PaleVioletRed;
	font-size: 20px;
	padding-left: 20px;
}
a{
	font-size: 20px;
	text-decoration: none;
}
</style>
</head>
<body>
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
                      <form method="Post">
	<table border="1">
		<tr colspan="2">
			<td style="background-color:PaleVioletRed;font-size:15px;">
				<b>ANNABELLE TEST<br><br>
				DATE OF Birth:4/22/2013, Age:15y<br><br><br>
				TOTAL OUTSTANDING:<br>
				Insurance OUTSTANDING:<br>
				SENT COLLECTIONs:<br>
				<p style="margin-left:60px">current statement</p></b>

			</td>

			<td style="font-size:15px">
				<address>
					<b>Rainbow Children's Clinic<br><br>
					914,Main Ave<br><br>
					Fort Worth, TX 070559998<br><br>
					phone:(973)458-8000<br><br>
					Fax:(862)238-833<br><br></b>
				</address>	
		</tr>
		<tr>

			<td colspan="2"><a href="main.php">Demographics &nbsp;&nbsp;&nbsp;| <a href="main2.php">Medical & Social History&nbsp;&nbsp;&nbsp;&nbsp;|<a href="logout.php">Logout&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>	
		<tr colspan="2">
			<td style="background-color:PaleVioletRed">Demographics</td>
			<td style="padding-left:270px"> <button name="submit" value="submit">submit</button>
		</tr>
		<tr>
			<th style="padding-left:160px">Gender</th>
			<td style="padding-left:20px"><select name="s1">
				<option></option>
				<option>female</option>
				<option>male</option>
			</select>
			</td>
		</tr>
		<tr>
			<th style="padding-left:110px">RACE<br>(per federal mandate)</th>
			<td>
				<input type="checkbox" name="c1" value="Alaskan Native(Aleut,Eskimo,Indian)">Alaskan Native(Aleut,Eskimo,Indian)<br>
				<input type="checkbox" name="c1" value="American Indian Or Alaska Native"> American Indian Or Alaska Native<br>
				<input type="checkbox" name="c1" value="Asian"> Asian<br>
				<input type="checkbox" name="c1" value="Asian/pacific islander">Asian/pacific islander<br>
				<input type="checkbox" name="c1" value="Black or African American">Black or African American<br>

			</td>
		</tr>
		<tr>
			<th>
				Ethinicity <br>(per federal mandate)
			</th>
			<td><select name="s2">
				<option></option>
				<option>American</option>
				<option>Indian</option>
				<option>African</option>
			</td>
		</tr>
		<tr>
			<th>
				Preferred Language
			</th>
			<td> 
				<select name="s3">
				<option></option>
				<option>English(eng)</option>
				<option>Hindi</option>
				<option>marathi</option>
			</select>
			</td>
		</tr>
		<tr>
			<th>
				Home Phone
			</th>
			<td>
				<input type="number" name="hmph" value="" placeholder="9503934643">(number only)
			</td>
		</tr>

		<tr>
			<th>
				Cell Phone
			</th>
			<td>
				<input type="number" name="celph" value="" >(number only)
			</td>
		</tr>
		<tr>
			<th>
				Email address
			</th>
			<td>
				<input type="text" name="email" value="" size="40px">
			</td>
		</tr>
		<tr>
			<th>
				Direct  address
			</th>
			<td>
				<input type="text" name="da" value="" size="40px">
			</td>
		</tr>
		<tr>
			<th>
				Physical Address
			</th>
			<td>
				Address 1 &nbsp;<input type="text" name="phad1" value="" placeholder="308 mockingbird ln"><br>
				Address 2 &nbsp;<input type="text" name="phad2" value=""><br>
				City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="city1" value=""><br>
				State  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name="s4">
				<option></option>
				<option>mississcipi</option>
				<option>maharashtra</option>
				<option> kereala</option>
			</select><br>
			 Zip code &nbsp; &nbsp;<input type="text" name="zip1" value=""><br>
  			</td>
		</tr>
		<tr>
			<th>Insurance</th>
			<td> 1.United Health CARE</td>
		</tr>
		<tr>
			<th>
				how did you hear about us?
			</th>
			<td><select name="s6">
				<option></option>
				<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;website</option>
				<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;naukri</option>
			</select></td>
		</tr>
<tr>
<th>
Referring Providing
</th>

<td>Name<br><select  name="s7">
<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
<option>DR</option>
<option>Relative</option>
<option>friend</option>
<option>others</option>
</td>
</tr>
<tr>
	<th>Employee</th>
<td>
				Name &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" value=""><br>
   				Address 1 &nbsp;<input type="text" name="addr1" value=""s><br>
				Address 2 &nbsp;<input type="text" name="addr2" value=""><br>
				City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="city2" value=""><br>
				State  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name="s8">
				<option></option>
				<option>maharashtra</option>
				<option> kereala</option>
			</select><br>
			 Zip code &nbsp; &nbsp;<input type="text" name="zip2" value=""><br>
</td>
</tr>
<tr>
	<th> Emergency  Contact # 1</th>
<td>
<input type="checkbox" name="check" value="">Copy the Physical Address<br><br>
				Name&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name1" value=""><br>
				Address 1 &nbsp;<input type="text" name="addr3" value=""><br>
				Address 2 &nbsp;<input type="text" name="addr4" value=""><br>
				City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="city3" value=""><br>
				State  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name="s9">
				<option></option>
				<option>maharashtra</option>
				<option> kereala</option>
			</select><br>
			 Zip code &nbsp; &nbsp;<input type="text" name="zip3" value=""><br>
			 Home Phone <input type="number" name="homeph" value="">(number only)<br>
			 Cell Phone <input type="number" name="cellph" value="">(number only)<br>
			 Work Phone <input type="number" name="workph" value="">(number only)<br><br>
			Relationship  with patient <select name="s10"><option></option>
			<option>brother</option>
			<option>mother</option>
			<option>father</option>
			<option>other</option>
			<option>husband</option>
		</select>
  </td>
</tr>	
<tr>
	<th> Emergency  Contact # 2</th>
<td>
<input type="checkbox" name="check" value="">Copy the Physical Address<br><br>
				Name&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name2" value=""><br>
				Address 1 &nbsp;<input type="text" name="addr5" value=""><br>
			    Address 2 &nbsp;<input type="text" name="a" value=""><br>
				City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="city4" value=""><br>
				State  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name="s11">
				<option></option>
				<option>maharashtra</option>
				<option> kereala</option>
			</select><br>
			 Zip code &nbsp; &nbsp;<input type="text" name="zip4" value=""><br>
			 Home Phone <input type="number" name="homeph1" value="">(number only)<br>
			 Cell Phone <input type="number" name="cellph1" value="">(number only)<br>
			 Work Phone <input type="number" name="workph1" value="">(number only)<br><br>
			Relationship  with patient <select name="s12"><option></option>
			<option>brother</option>
			<option>mother</option>
			<option>father</option>
			<option>other</option>
			<option>husband</option>
		</select>
  </td>
</tr>

<tr>
	<th> Emergency  Contact # 3</th>
<td>
<input type="checkbox" name="check" value="">Copy the Physical Address<br><br>
				Name&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name3" value=""><br>
				Address 1 &nbsp;<input type="text" name="addr7" value=""><br>
				Address 2 &nbsp;<input type="text" name="addr8" value=""><br>
				City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="city5" value=""><br>
				State  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name="s13">
				<option></option>
				<option>maharashtra</option>
				<option> kereala</option>
			</select><br>
			 Zip code &nbsp; &nbsp;<input type="text" name="zip5" value=""><br>
			 Home Phone <input type="number" name="homeph2" value="">(number only)<br>
			 Cell Phone <input type="number" name="cellph2" value="">(number only)<br>
			 Work Phone <input type="number" name="workph2" value="">(number only)<br><br>
			Relationship  with patient <select name="s14"><option></option>
			<option>brother</option>
			<option>mother</option>
			<option>father</option>
			<option>other</option>
			<option>husband</option>
		</select>
  </td>
</tr>
<tr>
<th></th>
<td style="padding-left:310px">
	<button name="submit" value="submit">submit</button>
</td>
</tr>

	</table>
	</form>
</body>
</html>