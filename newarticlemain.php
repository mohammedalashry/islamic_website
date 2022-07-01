<?php

@session_start();
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$formtitle= $_POST['title'];
	$formsubject= $_POST['subject'];
	$formcategory= $_POST['category'];
	$formimage = $_POST['image'];
	try{
$dbase = new PDO("mysql:host=n4m3x5ti89xl6czh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=tt1bqatv5vie1w94","ip2wg0u4ijy736k4","j8uaormv2lstoxjl");
	}
	catch(PDOException $e){
	echo "failed";echo $e -> getMessage();
	}
	$query = $dtbase -> prepare("INSERT INTO articles (title,subject,category, image) VALUES ('$formtitle','$formsubject','$formcategory','$formimage')");
	$query -> execute();
	$query = null;
	$dtbase= null;
	header("location:articlespage.php");

}

?>

<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>new article</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/mainstyle.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
.mainBody form {
	display: grid;
	grid-template-columns: repeat(4,25%);
	grid-template-areas: "titlelabel titleinput titleinput ." "subjectlabel subjectinput subjectinput ." "categorylabel categoryinput . ." "imagelabel imageinput fileslabel filesinput" ". publish publish ." ;
	grid-row-gap:10px;
	margin-bottom: 20px;
}	
.inputfile{
	cursor: pointer; 
	width: 20vw;
	max-width: 200px; 
	max-height: 30px;
	border-radius: 50px;
	opacity: 0;
}
.inputfileclick{
	background-color: #fcf9c6;
	width:20vw;
	max-width: 200px;
	height: 20vw;
	max-height: 30px;
	box-sizing: border-box;
    border: solid #9eb23b 3px;
    border-radius: 20px;
    text-align: center;
    font-weight: bold;
    z-index: -1;
    cursor: pointer;
}
/*
form label+input[type='file']::before {
	content: ' أضف  ';
	background-color: #fcf9c6;
	width:20vw;
	max-width: 200px;
	height: 20vw;
	max-height: 30px;
	position: absolute;
	box-sizing: border-box;
    border: solid #9eb23b 3px;
    border-radius: 20px;
    padding: 0.5vw 0;
    text-align: center;
    font-weight: bold;

}

*/

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
			<i class="fa fa-user" style="display: inline-block;"> </i>
			<input type="checkbox" class="chbox2" name="">
			<ul>
						<li><a href="/islamic_website"> المفضلات</a></li>
						<li><a href="/islamic_website"> المساهمات </a></li>
						<li><a href="/islamic_website"> السجل </a></li>
						<li><a href="newarticle.php"> نشر مقالة  جديدة  </a></li>
						<hr>
						<li><a href="/islamic_website"> البيانات الشخصية  </a></li>
						<li><a href="logout.php"> تسجيل الخروج  </a></li>
			</ul>
		   
		</div>
</div>
<div class="mainBody">
	<div class="gridSystem">
		


	</div>
		<form method="POST">
			<label style="grid-area: titlelabel;">العنوان  </label>
			<input style="grid-area: titleinput;height: 30px;" type="text" name="title">
			<label style="grid-area: subjectlabel;"> الموضوع    </label>
			<textarea name='subject' style="grid-area: subjectinput; height: 300px;overflow: auto;" contenteditable='true' ></textarea>
			<label style="grid-area: categorylabel;" >القسم    </label>
			<select style="grid-area: categoryinput;" name="category" >
				<option value="quraan">قرءان</option>
				<option value="hadeeth"> حديث   </option>
				<option value="serah">  سيرة  </option>
				<option value="fekh">  فقه  </option>
			</select>
			<label style="grid-area: imagelabel;"> صورة للموضوع  (اذا يوجد) </label>
			<input class='inputfile' style="grid-area: imageinput;" type="file" name="image" >
			<span style="	grid-area: imageinput;" class="inputfileclick"> أضف </span>
			<label style="grid-area: fileslabel;">الملفات   </label>
			<input class='inputfile' style="grid-area: filesinput;" type="file" name="uploadedfiles" multiple>
			<span style="	grid-area: filesinput;" class="inputfileclick"> أضف  </span>
			<input style="grid-area: publish; height: 30px;width: 20vw; margin: 5vw auto;" type="submit" value="نشر " >


		</form>
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
