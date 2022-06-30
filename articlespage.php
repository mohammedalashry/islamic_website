<?php

@session_start();
try{
	$dtbase= new PDO("mysql:host=localhost;dbname=islamic_website","root","");
}
catch (PDOException $e){
	$e -> getMessage();

}
	$query = $dtbase-> prepare("SELECT * FROM articles ");
	$query -> execute();
	$query = $query-> fetchAll();
	$ids = array();
	$titles = array();
	$subjects= array();
	$files=array();
	$links=array();
	$images= array();
	$categories= array();
	for ($i=0; ;$i++):
		if (isset($query[$i]['title'])==FALSE)
		{
			break;
		}
		$ids[$i]=$query[$i]['id'];
		$titles[$i]=$query[$i]['title']; 
		$subjects[$i]=$query[$i]['subject'];
		$links[$i]= 'articles/'.$ids[$i].".php";
		$images[$i]= $query[$i]['image'];
		$categories[$i]= $query[$i]['category'];
		$files[$i] = fopen('articles/'. $ids[$i] .'.php', 'w');
		fwrite($files[$i], $titles[$i]."<br> <hr>".$subjects[$i]."<br><hr>". $links[$i]. "<br><hr>" . $categories[$i] . "<br><hr>" . $images[$i] );
		fclose($files[$i]);


		
	endfor;
	$query=null;
	$dtbase=null;

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
		<?php
		 for ($i=0;$i<count($ids);$i++):
			echo "<div>"; 
			echo "<div><img src='img/".$images[$i] . " '></div>";
		 	echo "<h3><a href=' ".$links[$i] ." '>".$titles[$i] ."</a></h3>"; 
		 	echo "<p>". $subjects[$i] . "</p>"; 
		 	echo "</div>"; 
		 endfor;
		?>
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