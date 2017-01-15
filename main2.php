<?php
include("config.php");
    error_reporting(0);
    if(isset($_POST["submit"]) && ($_POST["submit"]=="submit"))
        {
          $Parentmartialstatus = mysql_real_escape_string(trim($_POST["s1"]));
          $Liveswith= mysql_real_escape_string(trim($_POST["s2"]));
          $Occupation = mysql_real_escape_string(trim($_POST["i1"]));
          $Pet = mysql_real_escape_string(trim($_POST["s3"]));
          $SmokeDetector = mysql_real_escape_string(trim($_POST["s"]));
          $Smokingstatus = mysql_real_escape_string(trim($_POST["s4"]));
          $Comment = mysql_real_escape_string(trim($_POST["t1"]));
          $Startdate = mysql_real_escape_string(trim($_POST["d1"]));
          $Quitdate = mysql_real_escape_string(trim($_POST["d2"]));
          $Smokeexposure= mysql_real_escape_string(trim($_POST["ss"]));
          $Codetector = mysql_real_escape_string(trim($_POST["sss"]));
          $Firearmhome = mysql_real_escape_string(trim($_POST["ssss"]));
          $Firearmsecure = mysql_real_escape_string(trim($_POST["sssss"]));
          $Daycaretype = mysql_real_escape_string(trim($_POST["s5"]));
          $Daycareperweek = mysql_real_escape_string(trim($_POST["s6"]));
          $Schoollevel = mysql_real_escape_string(trim($_POST["s7"]));
          $Schoolaveragegrade = mysql_real_escape_string(trim($_POST["s8"]));
          $Activity = mysql_real_escape_string(trim($_POST["t2"]));
		  $Bikehelmet = mysql_real_escape_string(trim($_POST["s9"]));
		  $Seatbelt = mysql_real_escape_string(trim($_POST["s10"]));
		  $Carseat = mysql_real_escape_string(trim($_POST["s11"]));
          $Averagediet = mysql_real_escape_string(trim($_POST["s12"]));
          $Milkusage = mysql_real_escape_string(trim($_POST["s13"]));
          $OZ = mysql_real_escape_string(trim($_POST["i2"]));
          $Waterusage = mysql_real_escape_string(trim($_POST["s14"]));
          $Sleepinglocation = mysql_real_escape_string(trim($_POST["s15"]));
          $Sleepingfrequency= mysql_real_escape_string(trim($_POST["s16"]));




           $sqlInsert2 ="INSERT INTO `socialhistory`( `parentmstatus`,`liveswith`,`occupation`,`pet`,`smokedetector`,`smokingstatus`,`comment`,`startdate`,`quitdate`,`smokeexposure`,`codetector`,`firearmhome`,`firearmsecure`,`daycaretype`,`daycareperweek`,`schoollevel`,`averagegrade`,`activity`,`bikehelmet`,`seatbelt`,`carseat`,`averagediet`,`milkusage`,`oz`,`waterusage`,`sleepinglocation`,`sleepingfrequency` ) VALUES 
                                                    ('$Parentmartialstatus','$Liveswith','$Occupation','$Pet','$SmokeDetector','$Smokingstatus','$Comment','$Startdate','$Quitdate','$Smokeexposure','$Codetector','$Firearmhome','$Firearmsecure','$Daycaretype','$Daycareperweek','$Schoollevel','$Schoolaveragegrade','$Activity','$Bikehelmet','$Seatbelt','$Carseat','$Averagediet','$Milkusage','$OZ','$Waterusage','$Sleepinglocation','$Sleepingfrequency')";        
	          $sqlInserted1 = mysql_query($sqlInsert2);
             header("location:welcome1.php");
        }  
?>
  <html>
<head>
<title> information</title>
<style type="text/css">
.left{
	padding-left:20px;
	padding-top: 20px;
}
.right{
	padding-left: 370px;
	margin-top: -1330px;
}
.right1{
	padding-left: 370px;
	margin-top: -2740px;
	padding-right: 20px;
}


td{
padding-left: 20px;
background-color: PaleGoldenRod;
padding-top: 10px;
padding-bottom: 10px;
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
	margin-left: 420px;
}
a{
	font-size: 20px;
	text-decoration: none;
}
</style>
</head>
<body>
	<form method="Post">
	<table border=1>
		<tr colspan="2">
			<td style="background-color:PaleVioletRed;font-size:15px;">
				<b>ANNABELLE TEST<br><br>
				DATE OF Birth:4/22/2013, Age:15y</b><br><br><br>
				
			</td>

			<td style="font-size:15px">
				<address>
					<b>Rainbow Children's Clinic<br><br>
					914,Main Ave<br><br>
					Fort Worth, TX 070559998<br><br>
					phone:(973)458-8000<br><br>
					Fax:(862)238-833<br><br><b>
				</address>	
		</tr>
		<tr>

			<td colspan="2"><a style="padding-left:100px" href="main.php">Demographics &nbsp;&nbsp;&nbsp;|<a href="main2.php">Medical & Social History&nbsp;&nbsp;&nbsp;&nbsp;|<a href="logout.php">Logout&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>	
		<tr colspan="2">
			<th>Medical   & Social History</th>
			<td style="padding-left:110px"><button name="submit" value="submit">submit</button>
		</tr>
		<tr>
			<th>Medical History</th>
			<td>
<div class="left">
	<input type="checkbox" name="check" value="AAA">AAA<br><br>
	<input type="checkbox" name="check1" value="ADHD"> ADHD<br><br>
	<input type="checkbox" name="check3" value="Alcohol/Substance Obtuse">Alcohol/Substance Obtuse<br><br>
	<input type="checkbox" name="check5" value="Alcohol Dependant"> Alcohol Dependant<br><br>
	<input type="checkbox" name="check7" value="Allergies"> Allergies<br><br>
	<input type="checkbox" name="check9" value="Alzheimer's"> Alzheimer's	<br><br>
	<input type="checkbox" name="check11" value="Anxiety"> Anxiety<br><br>
	<input type="checkbox" name="check13" value="Arthritis"> Arthritis<br><br>
	<input type="checkbox" name="check15" value="Asthama"> Asthama<br><br>
	<input type="checkbox" name="check17" value="Atrial Fibrillation"> Atrial Fibrillation<br><br>
	<input type="checkbox" name="check19" value="Back Pain Chronic">Back Pain Chronic<br><br>
	<input type="checkbox" name="check21" value="Bleeding Problem">Bleeding Problem<br><br>
	<input type="checkbox" name="check23" value="CAD"> CAD<br><br>
	<input type="checkbox" name="check25" value="Cancer"> Cancer<br><br>
	<input type="checkbox" name="check27" value="Cancer Breast"> Cancer Breast<br><br>
	<input type="checkbox" name="check29" value="Cancer Colon"> Cancer Colon<br><br>
	<input type="checkbox" name="check31" value="Cancer Prostate"> Cancer Prostate<br><br>
	<input type="checkbox" name="check33" value="Cancer Skin"> Cancer Skin<br><br>
	<input type="checkbox" name="check35" value="Cancer Thyroid"> Cancer Thyroid<br><br>
	<input type="checkbox" name="check37" value="CHF"> CHF<br><br>
	<input type="checkbox" name="check39" value="COPD"> COPD<br><br>
	<input type="checkbox" name="check41" value="Crohns Disease">Crohns Disease<br><br>
	<input type="checkbox" name="check43" value="CVA"> CVA<br><br>
	<input type="checkbox" name="check45" value="Dementia"> Dementia<br><br>
	<input type="checkbox" name="check47" value="Depression"> Depression<br><br>
	<input type="checkbox" name="check49" value="Diebetis"> Diebetis<br><br>
	<input type="checkbox" name="check51" value="Epilepsy"> Epilepsy<br><br>
	<input type="checkbox" name="check53" value="Erectile Disfunction"> Erectile Disfunction<br><br>
	<input type="checkbox" name="check55" value="Fibromyalgia"> Fibromyalgia<br><br>
	<input type="checkbox" name="check57" value="GI Bleeding"> GI Bleeding<br><br>
	<input type="checkbox" name="check59" value="Gout"> Gout<br><br>
	<input type="checkbox" name="check61" value="Head Concussion/Injury"> Head Concussion/Injury<br><br>
	<input type="checkbox" name="check63" value="Headache, Chronic"> Headache, Chronic<br><br>
	<input type="checkbox" name="check65" value="Hearing Loss"> Hearing Loss<br><br>
	<input type="checkbox" name="check67" value="Heartattack"> Heartattack<br><br>
    <input type="checkbox" name="check69" value="Heart Disease"> Heart Disease<br><br>
	<input type="checkbox" name="check71" value="Heart Burn"> Heart Burn<br><br>
	<input type="checkbox" name="check73" value="High Bloodpressure"> High Bloodpressure<br><br>

</div>
<div class="right">
<input type="checkbox" name="check2" value="High Cholestrol">High Cholestrol<br><br>
<input type="checkbox" name="check4" value="HTN">HTN<br><br>
<input type="checkbox" name="check6" value="Hyperlipidemia">Hyperlipidemia<br><br>
<input type="checkbox" name="check8" value="Hyperthyrodism">Hyperthyrodism<br><br>
<input type="checkbox" name="check10" value="Hypothyrodism">Hypothyrodism<br><br>
<input type="checkbox" name="check12" value="IDDM">IDDM 	<br><br>
<input type="checkbox" name="check14" value="Insommia">Insommia<br><br>
<input type="checkbox" name="check16" value="Irritable Bowel Syndromme"><br><br>
<input type="checkbox" name="check18" value="MI">MI<br><br>
<input type="checkbox" name="check20" value="NIDDM">NIDDM<br><br>
<input type="checkbox" name="check22" value="Obesity">Obesity<br><br>
<input type="checkbox" name="check24" value="Oesteoporosis">HTN<br><br>
<input type="checkbox" name="check26" value="PID">PID<br><br>
<input type="checkbox" name="check28" value="Reflux">Reflux<br><br>
<input type="checkbox" name="check30" value="Seizures">Seizures<br><br>
<input type="checkbox" name="check32" value="Sickel Cell">Sickel Cell<br><br>
<input type="checkbox" name="check34" value="Stroke">Strock<br><br>
<input type="checkbox" name="check36" value="Thyroid">Thyroid<br><br>
<input type="checkbox" name="check38" value="Surgury,Appendectomy">Surgury Appendectomy<br><br>
<input type="checkbox" name="check40" value="Surgury,Bypass">Surgury Bypass<br><br>
<input type="checkbox" name="check42" value="Surgury,Cholecystectomy">Surgury Cholecystectomy<br><br>
<input type="checkbox" name="check44" value="Surgury,Coronary Artery Bypass Crafting"> Surgury ,Artery Bypass Crafting<br><br>
<input type="checkbox" name="check46" value="Surgury,Hysterctomy">Surgury Hysterctom<br><br>
<input type="checkbox" name="check48" value="Surgury,Joint Replacement">Surgury Joint Replacement<br><br>
<input type="checkbox" name="check50" value="Surgury,Mastectomy">Surgury,Mastectomy<br><br>
<input type="checkbox" name="check52" value="Surgury,Sinus Surgury">Surgury,Sinus Surgury<br><br>
<input type="checkbox" name="check54" value="Surgury,Thyriodectomy">Surgury,Thyriodectom<br><br>
<input type="checkbox" name="check56" value="Thyroid Condition">Thyroid Condition<br><br>
<input type="checkbox" name="check58" value="TIA">TIA<br><br>
<input type="checkbox" name="check60" value="Tonsilitis">Tonsilitis<br><br>
<input type="checkbox" name="check62" value="Tuberculosis Exposure">Tuberculosis Exposure<br><br>
<input type="checkbox" name="check64" value="Ulcer">Ulcer<br><br>
<input type="checkbox" name="check66" value="Ulcer">Ulcer<br><br>
<input type="checkbox" name="check68" value="Ulcer">Ulcer<br><br>
<input type="checkbox" name="check70" value="Ulcers">Ulcers<br><br>
<input type="checkbox" name="check72" value="UTI,chronic">UTI,chronic<br><br>
<input type="checkbox" name="check74" value="Vision Loss">Vision Loss<br><br>
<input type="checkbox" name="check76" value="High cholesterol">High cholesterol<br><br>
</div>		
			
</td>
</tr>
<tr>
<th>Other Medical Condition</th>
<td><textarea rows="5" cols="75"></textarea></td>
</tr>
<tr>
<th> Family Medical history
</th>
<td>
<div class="left">
	<input type="checkbox" name="check" value="AAA">AAA<br><br>Relationship with patient <select name="p1">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check1" value="ADHD"> ADHD
	<br><br>Relationship with patient <select name="p2">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check3" value="Alcohol/Substance Obtuse">Alcohol/Substance Obtuse
	<br><br>Relationship with patient <select name="p3">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check5" value="Alcohol Dependant"> Alcohol Dependant
	<br><br>Relationship with patient <select name="p4">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check7" value="Allergies"> Allergies
	<br><br>Relationship with patient <select name="p5">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check9" value="Alzheimer's"> Alzheimer's
	<br><br>Relationship with patient <select name="p6">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check11" value="Anxiety"> Anxiety
	<br><br>Relationship with patient <select name="p7">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check13" value="Arthritis"> Arthritis
	<br><br>Relationship with patient <select name="p8">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check15" value="Asthama"> Asthama
	<br><br>Relationship with patient <select name="p9">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check17" value="Atrial Fibrillation"> Atrial Fibrillation
	<br><br>Relationship with patient <select name="p10">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check19" value="Back Pain Chronic">Back Pain Chronic
	<br><br>Relationship with patient <select name="p11">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check21" value="Bleeding Problem">Bleeding Problem
	<br><br>Relationship with patient <select name="p12">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check23" value="CAD"> CAD
	<br><br>Relationship with patient <select name="p13">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check25" value="Cancer"> Cancer
	<br><br>Relationship with patient <select name="p14">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check27" value="Cancer Breast"> Cancer Breast
	<br><br>Relationship with patient <select name="p15">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check29" value="Cancer Colon"> Cancer Colon
	<br><br>Relationship with patient <select name="p16">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check31" value="Cancer Prostate"> Cancer Prostate
	<br><br>Relationship with patient <select name="p17">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check33" value="Cancer Skin"> Cancer Skin
	<br><br>Relationship with patient <select name="p18">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check35" value="Cancer Thyroid"> Cancer Thyroid
	<br><br>Relationship with patient <select name="p19">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check37" value="CHF"> CHF
	<br><br>Relationship with patient <select name="p20">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check39" value="COPD"> COPD
	<br><br>Relationship with patient <select name="p21">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check41" value="Crohns Disease">Crohns Disease
	<br><br>Relationship with patient <select name="p22">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check43" value="CVA"> CVA
	<br><br>Relationship with patient <select name="p23">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check45" value="Dementia"> Dementia
	<br><br>Relationship with patient <select name="p24">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check47" value="Depression"> Depression
	<br><br>Relationship with patient <select name="p25">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check49" value="Diebetis"> Diebetis
	<br><br>Relationship with patient <select name="p26">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check51" value="Epilepsy"> Epilepsy
	<br><br>Relationship with patient <select name="p27">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check53" value="Erectile Disfunction"> Erectile Disfunction
	<br><br>Relationship with patient <select name="p28">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check55" value="Fibromyalgia"> Fibromyalgia
	<br><br>Relationship with patient <select name="p29">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check57" value="GI Bleeding"> GI Bleeding
	<br><br>Relationship with patient <select name="p30">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check59" value="Gout"> Gout
	<br><br>Relationship with patient <select name="p31">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check61" value="Head Concussion/Injury"> Head Concussion/Injury
	<br><br>Relationship with patient <select name="p32">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check63" value="Headache, Chronic"> Headache, Chronic
	<br><br>Relationship with patient <select name="p33">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check65" value="Hearing Loss"> Hearing Loss<br><br>Relationship with patient <select name="p34">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check67" value="Heartattack"> Heartattack<br><br>Relationship with patient <select name="p35">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
    <input type="checkbox" name="check69" value="Heart Disease"> Heart Disease
    <br><br>Relationship with patient <select name="p36">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check71" value="Heart Burn"> Heart Burn
	<br><br>Relationship with patient <select name="p37">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>
	<input type="checkbox" name="check73" value="High Bloodpressure"> High Bloodpressure
	<br><br>Relationship with patient <select name="p38">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select>		
<br><br>

</div>
<div class="right1">
<input type="checkbox" name="check2" value="High Cholestrol">High Cholestrol<br><br>
Relationship with patient <select name="p39">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check4" value="HTN">HTN<br><br>
     Relationship with patient <select name="p39">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check6" value="Hyperlipidemia">Hyperlipidemia<br><br>
     Relationship with patient <select name="p40">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check8" value="Hyperthyrodism">Hyperthyrodism<br><br>
     Relationship with patient <select name="p41">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check10" value="Hypothyrodism">Hypothyrodism<br><br>
     Relationship with patient <select name="p42">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check12" value="IDDM">IDDM <br><br>
     Relationship with patient <select name="p43">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check14" value="Insommia">Insommia<br><br>
     Relationship with patient <select name="p44">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check16" value="Irritable Bowel Syndromme"><br><br>
     Relationship with patient <select name="p45">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check18" value="MI">MI<br><br>
     Relationship with patient <select name="p46">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check20" value="NIDDM">NIDDM<br><br>
     Relationship with patient <select name="p47">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check22" value="Obesity">Obesity<br><br>
     Relationship with patient <select name="p48">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check24" value="Oesteoporosis">HTN<br><br>
     Relationship with patient <select name="p49">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check26" value="PID">PID<br><br>
     Relationship with patient <select name="p50">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check28" value="Reflux">Reflux<br><br>
     Relationship with patient <select name="p51">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check30" value="Seizures">Seizures<br><br>
     Relationship with patient <select name="p52">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check32" value="Sickel Cell">Sickel Cell<br><br>
     Relationship with patient <select name="p53">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check34" value="Stroke">Strock<br><br>
     Relationship with patient <select name="p54">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check36" value="Thyroid">Thyroid<br><br>
     Relationship with patient <select name="p55">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check38" value="Surgury,Appendectomy">Surgury Appendectomy<br><br>
     Relationship with patient <select name="p56">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check40" value="Surgury,Bypass">Surgury Bypass<br><br>
Relationship with patient <select name="p57">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check42" value="Surgury,Cholecystectomy">Surgury Cholecystectomy<br><br>
     Relationship with patient <select name="p58">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check44" value="Surgury,Coronary Artery Bypass Crafting"> Surgury ,Artery Bypass Crafting<br><br>
     Relationship with patient <select name="p59">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check46" value="Surgury,Hysterctomy">Surgury Hysterctom<br><br>
Relationship with patient <select name="p60">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check48" value="Surgury,Joint Replacement">Surgury Joint Replacement<br><br>
     Relationship with patient <select name="p61">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check50" value="Surgury,Mastectomy">Surgury,Mastectomy<br><br>
     Relationship with patient <select name="p62">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check52" value="Surgury,Sinus Surgury">Surgury,Sinus Surgury<br><br>
     Relationship with patient <select name="p63">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check54" value="Surgury,Thyriodectomy">Surgury,Thyriodectom<br><br>
     Relationship with patient <select name="p64">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check56" value="Thyroid Condition">Thyroid Condition<br><br>
Relationship with patient <select name="p65">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check58" value="TIA">TIA<br><br>
     Relationship with patient <select name="p66">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check60" value="Tonsilitis">Tonsilitis<br><br>
     Relationship with patient <select name="p67">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check62" value="Tuberculosis Exposure">Tuberculosis Exposure<br><br>
     Relationship with patient <select name="p68">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check64" value="Ulcer">Ulcer<br><br>
     Relationship with patient <select name="p69">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check66" value="Ulcer">Ulcer<br><br>
     Relationship with patient <select name="p70">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check68" value="Ulcer">Ulcer<br><br>
     Relationship with patient <select name="p71">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check70" value="Ulcers">Ulcers<br><br>
     Relationship with patient <select name="p72">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check72" value="UTI,chronic">UTI,chronic<br><br>
     Relationship with patient <select name="p73">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
</select><br><br>
<input type="checkbox" name="check74" value="Vision Loss">Vision Loss<br><br>
Relationship with patient <select name="p74">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
	</select><br><br>
	<input type="checkbox" name="check76" value="High cholesterol">High cholesterol<br><br>
     Relationship with patient <select name="p75">
	<option>&nbsp;&nbsp;&nbsp;</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father</option>
	<option>Mother</option>
	<option>Brother</option>
	<option>Sister</option>
	<option>Other</option>
	</select><br><br>
</div>		
			
</td>
</tr>
<tr>
	<th>Surgical History</th>
</tr>
<tr>
	<th>Allergies</th>
</tr>

<tr>
<th>Pharmacy</th>
</tr>
<tr>
<th>Mediciations</th>
</tr>
<tr>
<th>Parent Marital Status</th>
<td><select name="s1">
		<option></option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Married</option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unmarried</option>
		</select>
</td>
</tr>
<tr>
<th>Lives With</th>
<td><select name="s2">
		<option></option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;father</option>
		<option>husband</option>
		<option>other</option>
		</select>
</tr>
<tr>
<th>Occupation</th>
<td>
	<input type="text" name="i1" value="" size="70"></td>
</tr>
<tr>
	<th>Pets</th>
	<td><select name="s3">
		<option></option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yes</option>
		<option>No</option></select></td>
</tr>
<tr>
	<th>Smoke Detector</th>
	<td><fieldset><legend>Is the smoke detector present in home?</legend>
	<input type="radio" name="s" value="yes">yes
	<input type="radio" name="s" value="No">No
	</fieldset>
</td>
</tr>
<tr><th>Smoking</th>
	<td>Smoking Status<br><select name="s4">
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yes</option>
		<option>No</option>
		</select><br><br>
Comment
	<br><textarea rows="4" cols="65" name="t1"></textarea><br><br>
	Start Smoking Date<br><input type="date" name="d1" value=""><br><br>
	End Smoking Date<br> <input type="date" name="d2" value="">
</td>
</tr>

<tr><th>Smoke Explosure</th>
	<td><fieldset><legend>Is the patient routienly expose to smoke?</legend>
	<input type="radio" name="ss" value="yes">yes
	<input type="radio" name="ss" value="No">No
	</fieldset></td></tr>

<tr>
<th>CO Detector</th>
	<td><fieldset><legend>Is a Carbon monoxide(CO) detector present in a home?</legend>
	<input type="radio" name="sss" value="yes">yes
	<input type="radio" name="sss" value="No">No
	</fieldset>
</td></tr>

<tr><th>Firearm</th>
<td><fieldset><legend>Is a Firearm present in a home?</legend>
	<input type="radio" name="ssss" value="yes">yes
	<input type="radio" name="ssss" value="No">No
	</fieldset><br>
	<fieldset><legend>If yes? are firearm secure?</legend>
	<input type="radio" name="sssss" value="yes">yes
	<input type="radio" name="sssss" value="No">No
	</fieldset>
</td>
</tr>

<tr>
<th>DayCare</th>
<td>Type of day care<select name="s5">
		<option></option>
		<option>daily</option>
		<option>weekly</option>
		<option>monthly</option>
		</select>
<br><br>
DayCare per week
		<select name="s6">
		<option></option>
		<option>2</option>
		<option>4</option>
		<option>everyday</option>
		</select>
</td>
</td>
</tr>

<tr>
<th>School</th>
<td>Current School Level
	<select name="s7">
	<option></option>
	<option>daily</option>
	<option>weekly</option>
	<option>monthly</option>
	</select>
<br><br>
Average Grade
	<select name="s8">
	<option></option>
	<option>very good</option>
	<option>good</option>
	<option>Average</option>
	</select>
</td>
</tr>

<tr><th>Activity</th>
<td style="padding-top:10px"><textarea rows="4" cols="65" name="t2"></textarea>
</td>
</tr>

<tr><th>Bike Helmet</th>
	<td>Bike Helmet Usage&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="s9">
	<option></option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;yes</option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;No</option>
	</select>
</td>
</tr>

<tr>
	<th>Seats Belt</th>
	<td>Seat Belt Usage &nbsp;&nbsp;&nbsp;&nbsp;
			<select name="s10">
				<option></option>
				<option>&nbsp;&nbsp;&nbsp;&nbsp;yes</option>
				<option>&nbsp;&nbsp;&nbsp;&nbsp;No</option>
				</select></td>
</tr>

<tr>
	<th>Car Seats</th>
	<td>Car seat Usage &nbsp;&nbsp;&nbsp;&nbsp;
		<select name="s11">
		<option></option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;yes</option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;No</option>
		</select>
</td></tr>

<tr>
<th>Eating & Drinking Habits</th>
<td>
 Average Diet &nbsp;&nbsp;&nbsp;&nbsp;
	<select name="s12">
		<option></option><option>&nbsp;&nbsp;&nbsp;&nbsp;yes</option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;No</option>
		</select>
<br><br>
Milk Usage &nbsp;&nbsp;&nbsp;&nbsp;
	<select name="s13">
	<option></option>
	<option>&nbsp;&nbsp;&nbsp;&nbsp;yes</option>
    <option>&nbsp;&nbsp;&nbsp;&nbsp;No</option>
	</select>
<br><br>
Number of Oz/Day or# of  Bf &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="i2" value=""><br><br>
Water Usage &nbsp;&nbsp;&nbsp;&nbsp;
		<select name="s14">
		<option></option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;lot</option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;good</option>
		<option>poor</option>
		<option>very poor</option>
		</select>
</td>
</tr>

<tr><th>
	Sleeping Habits
	</th>
	<td>
		Sleeping Position&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="s15"><option></option>
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left</option>
		<option>right</option>
		<option>straight</option>
				</select>
<br><br>
		Sleeping Frequency&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="s16"><option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</option><option>good</option>
		<option>poor</option>
		<option>very poor</option>
		</select>

</td>
</tr>
	</table>
	</form>
</body>
</html>