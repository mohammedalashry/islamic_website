<?php
@session_start();
$user= $_SESSION['Email'];
try{

$dbase = new PDO("mysql:host=n4m3x5ti89xl6czh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=tt1bqatv5vie1w94","ip2wg0u4ijy736k4","j8uaormv2lstoxjl");
				
				}
catch(PDOException $e){
				echo "failed"; echo $e -> getMessage();
				}
$Data = $dbase ->prepare("SELECT * FROM users WHERE email='$user'");
$Data ->execute();
$Data = $Data -> fetchAll();
$firstName= $Data [0]['firstname'];
$lastName= $Data [0]['lastname'];
$emailAddress= $Data [0]['email'];
$password= $Data [0]['password'];
$role= $Data [0]['type_of_access'];
//echo $firstName . "<br>" . $lastName . "<br>" . $emailAddress . "<br>"  . $password . "<br>"  . $role . "<br>";

?>
<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>personal data</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/mainstyle.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.personal-data{
		display: grid;
		grid-template-columns: repeat(4,20vw);
		grid-template-areas: "personaldatalabel1 personaldatalabel1- personaldatalabel2 personaldatalabel2-" "personaldatalabel3 personaldatalabel3- personaldatalabel4 personaldatalabel4-" "personaldatalabel5 personaldatalabel5- change-pass .";
		margin: 20px 0;
		grid-row-gap: 20px;
		justify-content: center;

	}
</style>
</head>
<body>
<div class="heart">	
<div class="menu">
		<ul>
			<li><a href="">اتصل بنا  </a></li>
			<li><a href="">اتصل بنا  </a></li>
			<li><a href="">اتصل بنا  </a></li>

		</ul>

		<div class="mainMenu">

			<div class="menubar">
				<span></span>
				<span></span>
				<span></span>

			</div>
			<input type="checkbox" class="chbox" name="">
			
			<ul class="verticalmenu">
					<li><a href="">quraan </a></li>
					<li><a href="">quraan </a></li>
					<li><a href="">quraan </a></li>
					<li><a href="">quraan </a></li>
					<li><a href="">quraan </a></li>
					<li><a href="">quraan </a></li>

			</ul>
			
		</div>
</div>
<div class="header">
	
		
		<div class="logo">
			<img src="img/ss.jpg">
			<h1 style="text-align: center;">تذكير </h1>
		</div>
		<div class="membership">
			<p style="font-weight: bold;display: inline-block;position: absolute;margin-top: 30px;">قائمة العضو  </p>
			<i class="fa fa-user"></i>
			<input type="checkbox" class="chbox2" name="">
			<ul>
						<li><a href="/islamic_website"> المفضلات</a></li>
						<li><a href="/islamic_website"> المساهمات </a></li>
						<li><a href="/islamic_website"> السجل </a></li>
						<li style="display: <?php if ($_SESSION['userlogin']=='admin'){echo 'block';}else{echo 'none';}?> ;" ><a href="newarticle.php"> نشر مقالة  جديدة  </a></li>
						<hr>
						<li><a href="personaldata.php"> البيانات الشخصية  </a></li>
						<li><a href="logout.php"> تسجيل الخروج  </a></li>

			</ul>
		</div>
</div>
<div class="mainBody">
	<div class="personal-data">
		<label style="grid-area: personaldatalabel1">الاسم الأول </label>
		<label style="grid-area: personaldatalabel1-"><?php echo $firstName ?></label>
		<label style="grid-area: personaldatalabel2">اسم العائلة </label>
		<label style="grid-area: personaldatalabel2-"><?php echo $lastName ?></label>
		<label style="grid-area: personaldatalabel3">البريد الالكتروني </label>
		<label style="grid-area: personaldatalabel3-"><?php echo $emailAddress ?></label>
		<label style="grid-area: personaldatalabel4">نوع العضوية  </label>
		<label style="grid-area: personaldatalabel4-"><?php echo $role ?></label>
		<label style="grid-area: personaldatalabel5">كلمة المرور</label>
		<label style="grid-area: personaldatalabel5-"><?php echo "******" ?></label>
		<button style="grid-area: change-pass;"><a href="changepassword.php" style="cursor: pointer;">تغيير كلمة المرور  </a></button>

	</div>
	<label style="color:green;font-weight: bold;text-align: center; margin-bottom:5px;display:<?php if(isset($_SESSION['passwordChangedSucsses'])){echo 'block';}else{echo 'none';} ?>;"><?php if($_SESSION['passwordChangedSucsses'] !=0){echo "تم تغيير كلمة المرور ";} ?></label>

</div>
<div class="footer">
	<div class="footer1">
		<div>
			<h3>محمد العشري الجن نمبر وان</h3>
			<p>ازيك ازسك ازيك لاسز صصصصص صص  صص ص ص صص ضصضثضصثشؤسؤصثمطكوكطضصث   </p>
		</div>
		<div>
			<h3>محمد العشري الجن نمبر وان</h3>
			<p>ازيك ازسك ازيك لاسز صصصصص صص  صص ص ص صص ضصضثضصثشؤسؤصثمطكوكطضصث   </p>
		</div>
	</div>
	<div class="footer2">
		<div>
			<h3>محمد العشري الجن نمبر وان</h3>
			<p>ازيك ازسك ازيك لاسز صصصصص صص  صص ص ص صص ضصضثضصثشؤسؤصثمطكوكطضصث   </p>
		</div>
		<div>
			<h3>محمد العشري الجن نمبر وان</h3>
			<p>ازيك ازسك ازيك لاسز صصصصص صص  صص ص ص صص ضصضثضصثشؤسؤصثمطكوكطضصث   </p>
		</div>
	</div>
	<div class="footer3">
		<div>
			<h3>محمد العشري الجن نمبر وان</h3>
			<p>ازيك ازسك ازيك لاسز صصصصص صص  صص ص ص صص ضصضثضصثشؤسؤصثمطكوكطضصث   </p>
		</div>
		<div>
			<h3>محمد العشري الجن نمبر وان</h3>
			<p>ازيك ازسك ازيك لاسز صصصصص صص  صص ص ص صص ضصضثضصثشؤسؤصثمطكوكطضصث   </p>
		</div>
	</div>
</div>
</div>

</body>
</html>