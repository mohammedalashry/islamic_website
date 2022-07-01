<?php
session_start();
if ((@$_SERVER['HTTP_REFERER']!='http://localhost/islamic_website/personaldata.php') && (@$_SERVER['HTTP_REFERER']!='http://localhost/islamic_website/changepassword.php')){
	exit('you can`t access this page');

}
$error=0;
$_SESSION['passwordChangedSucsses']=0;

if ($_SERVER['REQUEST_METHOD']=='POST' ){
			try{

$dbase = new PDO("mysql:host=n4m3x5ti89xl6czh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=tt1bqatv5vie1w94","ip2wg0u4ijy736k4","j8uaormv2lstoxjl");
				
				}
			catch(PDOException $e){
				echo "failed"; echo $e -> getMessage();
				}
				$email=$_SESSION['Email'];
				$oldpassword=$_POST['oldpassword'];
				$newpassword=$_POST['newpassword'];
				$checkOldPass= $dbase -> prepare("SELECT password FROM users WHERE email='$email' AND password= '$oldpassword' ");
				$checkOldPass -> execute();
				$checkResult= count ($checkOldPass -> fetchAll());
				if ($checkResult==1):
					if (strlen($newpassword)<8){$error='كلمة المرور الجديدة لابد ان تكون اكثر  من  7 حروف  ';}
					if (preg_match("/[qwertyuiopasdfghjklzxcvbnm]/u", $newpassword)==0){$error='كلمة المرور لابد ان  تحتوي علي  حرف صغير ';}
					if (preg_match("/[QWERTYUIOPASDFGHJKLZXCVBNM]/u", $newpassword)==0){$error= 'كلمة المرور لابد أن تحتوي علي حرف كبير ';}
					if (preg_match("/[1-9]/i", $newpassword)==0){'كلمة المرور لابد أن تحتوي علي رقم ';}
					if ($error==0){
						$changepassword= $dbase->prepare("UPDATE users SET password = '$newpassword' WHERE email='$email' AND password= '$oldpassword' ");
						$changepassword -> execute();
						$changepassword=null;
						$_SESSION['passwordChangedSucsses']=1;
						header("location:personaldata.php");

					};


				
				else:
					$error= 'كلمة المرور القديمة خاطئة  ';
				endif;
				$checkOldPass=null;
				$dbase=null;





}


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
		grid-template-areas: "personaldatalabelpass1 . personaldatapass1 ." "personaldatalabelpass2 . personaldatapass2 ." ". change-pass change-pass .";
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
	<form class="personal-data" method="POST">
		<label required style="grid-area: personaldatalabelpass1"> كلمة المرور الحالية  </label>
		<input required style="grid-area: personaldatapass1" name="oldpassword" type="password">
		<label required style="grid-area: personaldatalabelpass2"> كلمة المرور الجديدة  </label>
		<input required style="grid-area: personaldatapass2" name="newpassword" type="password">
		<button style="grid-area: change-pass;cursor: pointer;height: 30px;width: 300px;margin: 0 auto;">تغيير</button>

	</form>
	<label style="color:red;"><?php if($error!=0){echo $error;} ?></label>

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
