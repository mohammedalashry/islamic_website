<?php
session_start();

if (!isset($_SESSION['emailDivError']) && !isset($_SESSION['passDivError'])){
	$_SESSION['emailDivError']="none";
	$_SESSION['passDivError']="none";
}

?>

<html dir="rtl">
<head>
	<meta charset="UTF-8">
	<title>تذكير </title>
	<link rel="stylesheet" href="css/mainstyle.css">

	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

.login-form{
	display:grid;
	grid-template-columns: repeat(2,40vw);
	grid-template-areas: "label1 label2"  "label3 label4" "label5 label5";
	column-gap: 2vw;
	grid-row-gap: 2vw;
}	
input[value="دخول"]:hover{
	background-color: #fcf9c6;
    cursor: pointer;
}
.login-form input{
	max-width: 20vw;
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
			<i class="fa fa-cloud">
				<ul>
					<li><a href="register.php">تسجيل عضو جديد  </a></li>
				</ul>
			</i>
		</div>
</div>
<div class="mainBody">
	<div class="gridSystem">
		<div id="registerform">
	  <form method="post" action="loginformaction.php" class="form login-form" >
		
		<label style="grid-area:label1 ;" required for="email"> االبريد الالكتروني  </label>
		<input style="grid-area:label2 ;" required type="text" name="emailAddress" id="email-" placeholder=" البريد الالكتروني  " value="<?php if (isset($_COOKIE['loginDataEmail'])){ echo $_COOKIE['loginDataEmail'];}?>" ><br>
		<label style="grid-area:label3 ;" required for="passwordlabel"> كلمة السر  </label>
		<input style="grid-area:label4 ;" required type="password" name="password" id="password" ><br>
		<input style="grid-area:label5 ; margin-left: auto;margin-right: auto;width:12vw;" type="submit" value = "دخول">
	  </form>
	  <p style="display: <?php echo $_SESSION['emailDivError']; ?> ;">البريد الالكتروني غير صحيح </p>
	  <p style="display: <?php echo $_SESSION['passDivError']; session_unset(); session_destroy(); ?> ;"> كلمة المرور غير صحيحة </p>
		</div>
	</div>
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