<?php

session_start();
if (isset($_SESSION['emailErrorDiv']) == FALSE && isset($_SESSION['passErrorDiv'])==FALSE && isset($_SESSION['fnErrorDiv'])==FALSE && isset($_SESSION['lnErrorDiv'])==FALSE )
{
$_SESSION['emailFoundDiv']='none';
$_SESSION['emailErrorDiv']='none';
$_SESSION['passErrorDiv']='none';
$_SESSION['fnErrorDiv']="none";
$_SESSION['lnErrorDiv']="none";
};

?>


<html dir="rtl">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="UTF-8">
	<title>تذكير </title>
	<link rel="stylesheet" href="css/mainstyle.css">

	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">


	
.form {
	display:grid;
	grid-template-columns: repeat(4,20vw);
	grid-template-areas: "label1 label2 label5 label6"  "label3 label4 label7 label8" ". label9 label9 .";
	column-gap: 2vw;
	grid-row-gap: 2vw;
}
.registersubmitbutton {
	justify-content: center;
	grid-area: label9;
	margin-right: auto;
	margin-left: auto;
    width: 20vw;
}

.registersubmitbutton:hover {
	background-color: #fcf9c6;
    cursor: pointer;

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
		
</div>
<div class="mainBody">
	<div class="gridSystem">
		<div>
	  <form method="post" action="registerformaction.php" class="form">
		<label required for="f-name" style="grid-area: label1;"> الاسم  الأول  </label>
		<input required type="text" name="firstName" class ="fname" placeholder="الاسم الاول"  style="grid-area: label2;" value="<?php if (isset($_COOKIE['registerDataFname'])) { echo $_COOKIE['registerDataFname'];} ?>"><br>
		<label required for="l-name" style="grid-area: label3;"> اسم العائلة  </label>
		<input required type="text" name="lastName" id="lname" placeholder=" اسم العائلة " style="grid-area: label4;" value="<?php  if (isset($_COOKIE['registerDataLname'])) { echo $_COOKIE['registerDataLname']; } ?>"><br>
		<label required for="email" style="grid-area: label5;" > البريد الالكتروني  </label>
		<input required type="text" name="emailAddress" id="email-" placeholder=" البريد الالكتروني  " style="grid-area: label6;" value="<?php if (isset($_COOKIE['registerDataEmail'])) { echo $_COOKIE['registerDataEmail'];} ?>"><br>
		<label required for="password" style="grid-area: label7;"> كلمة السر  </label>
		<input required type="password" name="password" id="password" style="grid-area: label8;"><br>
		<input class="registersubmitbutton" type="submit" value=" تسجيل  ">
	  </form>

	  <a href="login.php" style='margin-right: auto;margin-left: auto;margin-top: -50px;'>تسجيل الدخول  </a>
	  <p style="display: <?php echo $_SESSION['fnErrorDiv'] ?>;">الاسم  الاول  به حروف غير صحيحة </p>
	  <p style="display: <?php echo $_SESSION['lnErrorDiv'] ?>;">الاسم الثاني  به حروف غير صحيحة </p>
	  <p style="display: <?php echo $_SESSION['emailErrorDiv'] ?>;">الابريد الاكلتروني غير صحيح</p>
	  <p style="display: <?php echo $_SESSION['emailFoundDiv'] ?> ;"> البريد الالكتروني موجود بالفعل قم  بالدخول   </p>
	  <p style="display: <?php echo $_SESSION['passErrorDiv'];  session_unset();session_destroy();?>;">كلمة المرور غير مناسبى </p>
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