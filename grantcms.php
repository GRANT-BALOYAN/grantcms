<?php
session_start();
$pass='grant'; // Паароль для входа в GRANT CMS
$adm=0; // Если в переменной $adm==1 то мы успешно авторизованы ураааааааа
/*
		
░██████╗░██████╗░░█████╗░███╗░░██╗████████╗  ██████╗░░█████╗░██╗░░░░░░█████╗░██╗░░░██╗░█████╗░███╗░░██╗
██╔════╝░██╔══██╗██╔══██╗████╗░██║╚══██╔══╝  ██╔══██╗██╔══██╗██║░░░░░██╔══██╗╚██╗░██╔╝██╔══██╗████╗░██║
██║░░██╗░██████╔╝███████║██╔██╗██║░░░██║░░░  ██████╦╝███████║██║░░░░░██║░░██║░╚████╔╝░███████║██╔██╗██║
██║░░╚██╗██╔══██╗██╔══██║██║╚████║░░░██║░░░  ██╔══██╗██╔══██║██║░░░░░██║░░██║░░╚██╔╝░░██╔══██║██║╚████║
╚██████╔╝██║░░██║██║░░██║██║░╚███║░░░██║░░░  ██████╦╝██║░░██║███████╗╚█████╔╝░░░██║░░░██║░░██║██║░╚███║
░╚═════╝░╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚══╝░░░╚═╝░░░  ╚═════╝░╚═╝░░╚═╝╚══════╝░╚════╝░░░░╚═╝░░░╚═╝░░╚═╝╚═╝░░╚══╝
	*/

if((isset($_POST['slovo'])||isset($_POST['sekret']))||($_SESSION['sekret']==md5($pass))){
	if (($_POST['slovo']==$pass)||($_SESSION['sekret']==md5($pass))){
		$_SESSION['sekret']=md5($pass); 
		$adm=1;
		};
		} else {
			// Если пароля нет показываем форму входа  .
			echo('
			<!doctype html>
			<html lang="ru">
			<head>
			<meta charset="UTF-8">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport">
			</head>
			<body>
			<center><form method="POST" class="form" action="grantcms.php">
			
			
			
			<style>
			html {
				overflow:hidden;
			}
			body {
				overflow:hidden;
				background: linear-gradient(45deg, #fc466b, #3f5efb);
				height: 100vh;
				font-family: "Montserrat", sans-serif;
			  }
			  
			  .container {
				position: absolute;
				transform: translate(-50%, -50%);
				top: 50%;
				left: 50%;
			  }
			  
			  form {
				background: rgba(255, 255, 255, 0.3);
				padding: 3em;
				margin: 10% 10% 10% 10%;
				height: 70vh;
				overflow:hidden
				border-radius: 20px;
				border-left: 1px solid rgba(255, 255, 255, 0.3);
				border-top: 1px solid rgba(255, 255, 255, 0.3);
				-webkit-backdrop-filter: blur(10px);
						backdrop-filter: blur(10px);
				box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, 0.2);
				text-align: center;
				
				transition: all 0.2s ease-in-out;
			  }
			  form p {
				font-weight: 500;
				color: #fff;
				opacity: 0.7;
				font-size: 1.4rem;
				margin-top: 0;
				margin-bottom: 60px;
				text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
			  }
			  form a {
				text-decoration: none;
				color: #ddd;
				font-size: 12px;
			  }
			  form a:hover {
				text-shadow: 2px 2px 6px #00000040;
			  }
			  form a:active {
				text-shadow: none;
			  }
			  form input {
				background: transparent;
				width: 200px;
				padding: 1em;
				margin-bottom: 2em;
				border: none;
				border-left: 1px solid rgba(255, 255, 255, 0.3);
				border-top: 1px solid rgba(255, 255, 255, 0.3);
				border-radius: 5000px;
				-webkit-backdrop-filter: blur(5px);
						backdrop-filter: blur(5px);
				box-shadow: 4px 4px 60px rgba(0, 0, 0, 0.2);
				color: #fff;
				font-family: Montserrat, sans-serif;
				font-weight: 500;
				transition: all 0.2s ease-in-out;
				text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
			  }
			  form input:hover {
				background: rgba(255, 255, 255, 0.1);
				box-shadow: 4px 4px 60px 8px rgba(0, 0, 0, 0.2);
			  }
			  form input[type=email]:focus, form input[type=password]:focus {
				background: rgba(255, 255, 255, 0.1);
				box-shadow: 4px 4px 60px 8px rgba(0, 0, 0, 0.2);
			  }
			  form input[type=button] {
				margin-top: 10px;
				width: 150px;
				font-size: 1rem;
			  }
			  form input[type=button]:hover {
				cursor: pointer;
			  }
			  form input[type=button]:active {
				background: rgba(255, 255, 255, 0.2);
			  }
			  form:hover {
				
				margin: 15%;
			  }
			  
			  ::-moz-placeholder {
				font-family: Montserrat, sans-serif;
				font-weight: 400;
				color: #fff;
				text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
			  }
			  
			  :-ms-input-placeholder {
				font-family: Montserrat, sans-serif;
				font-weight: 400;
				color: #fff;
				text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
			  }
			  
			  ::placeholder {
				font-family: Montserrat, sans-serif;
				font-weight: 400;
				color: #fff;
				text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
			  }
			  
			  .drop {
				background: rgba(255, 255, 255, 0.3);
				-webkit-backdrop-filter: blur(10px);
						backdrop-filter: blur(10px);
				border-radius: 10px;
				border-left: 1px solid rgba(255, 255, 255, 0.3);
				border-top: 1px solid rgba(255, 255, 255, 0.3);
				box-shadow: 10px 10px 60px -8px rgba(0, 0, 0, 0.2);
				position: absolute;
				transition: all 0.2s ease;
			  }
			  .drop-1 {
				height: 80px;
				width: 80px;
				top: -20px;
				left: -40px;
				z-index: -1;
			  }
			  .drop-2 {
				height: 80px;
				width: 80px;
				bottom: -30px;
				right: -10px;
			  }
			  .drop-3 {
				height: 100px;
				width: 100px;
				bottom: 120px;
				right: -50px;
				z-index: -1;
			  }
			  .drop-4 {
				height: 120px;
				width: 120px;
				top: -60px;
				right: -60px;
			  }
			  .drop-5 {
				height: 60px;
				width: 60px;
				bottom: 170px;
				left: 90px;
				z-index: -1;
			  }
			  
			  a,
			  input:focus,
			  select:focus,
			  textarea:focus,
			  button:focus {
				outline: none;
			  }
			</style>



			
			
			<div class="container">
			
				<p>GRANT CMS</p>
				
				<input type="password" name="slovo" placeholder="Password"><br>
				<input type="submit" id="login-button" name="save" value="Sign in"><br>
				
			
			
			  <div class="drops">
				
			  </div>
			</div>













		
			</form></center></body></html>');
		};

if($adm==1){
if(isset($_POST['pagename'])){
	$_SESSION['pagename']=$_POST['pagename']; // Получаем имя страницы для редактирования
};	
if(isset($_SESSION['pagename'])){	
	$pagename=$_SESSION['pagename'];
} else {
	$pagename='index.html';	// Если его нет в куках и нет в POST запросе то ставим его=index.html	
};

// В переменную $template поместим код редактируемой странички
$template=file_get_contents($pagename);
/*
		
░██████╗░██████╗░░█████╗░███╗░░██╗████████╗  ██████╗░░█████╗░██╗░░░░░░█████╗░██╗░░░██╗░█████╗░███╗░░██╗
██╔════╝░██╔══██╗██╔══██╗████╗░██║╚══██╔══╝  ██╔══██╗██╔══██╗██║░░░░░██╔══██╗╚██╗░██╔╝██╔══██╗████╗░██║
██║░░██╗░██████╔╝███████║██╔██╗██║░░░██║░░░  ██████╦╝███████║██║░░░░░██║░░██║░╚████╔╝░███████║██╔██╗██║
██║░░╚██╗██╔══██╗██╔══██║██║╚████║░░░██║░░░  ██╔══██╗██╔══██║██║░░░░░██║░░██║░░╚██╔╝░░██╔══██║██║╚████║
╚██████╔╝██║░░██║██║░░██║██║░╚███║░░░██║░░░  ██████╦╝██║░░██║███████╗╚█████╔╝░░░██║░░░██║░░██║██║░╚███║
░╚═════╝░╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚══╝░░░╚═╝░░░  ╚═════╝░╚═╝░░╚═╝╚══════╝░╚════╝░░░░╚═╝░░░╚═╝░░╚═╝╚═╝░░╚══╝
	*/
// Выводит она шапку админки
echo('
<html>
<head>
<meta charset="utf-8">

<style>     a {
			color: #fff;
			}
			option {
			color: #000;
			}
			b {
			display: none;
			}
			html {
				
			}
			body {
				
				background: linear-gradient(45deg, #fc466b, #3f5efb);
				
				font-family: "Montserrat", sans-serif;
			  }
			 
			  body {
				text-align: center;
				display: flex;
				align-items: center;
				justify-content: center;
			  }
			  .div {
				background: rgba(255, 255, 255, 0.3);
				padding: 3em;
				margin: 5%;

				height: 70vh;
				
				border-radius: 20px;
				border-left: 1px solid rgba(255, 255, 255, 0.3);
				border-top: 1px solid rgba(255, 255, 255, 0.3);
				-webkit-backdrop-filter: blur(10px);
						backdrop-filter: blur(10px);
				box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, 0.2);
				text-align: center;
				
				transition: all 0.2s ease-in-out;
			  }
			 
			  select,br,.a, form input {
				background: transparent;
				width: 200px;
				padding: 1em;
				margin-bottom: 2em;
				border: none;
				border-left: 1px solid rgba(255, 255, 255, 0.3);
				border-top: 1px solid rgba(255, 255, 255, 0.3);
				border-radius: 5000px;
				-webkit-backdrop-filter: blur(5px);
						backdrop-filter: blur(5px);
				box-shadow: 4px 4px 60px rgba(0, 0, 0, 0.2);
				color: #fff;
				font-family: Montserrat, sans-serif;
				font-weight: 500;
				transition: all 0.2s ease-in-out;
				text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
			  }
			  form input:hover {
				background: rgba(255, 255, 255, 0.1);
				box-shadow: 4px 4px 60px 8px rgba(0, 0, 0, 0.2);
			  }
			  form input[type=email]:focus, form input[type=password]:focus {
				background: rgba(255, 255, 255, 0.1);
				box-shadow: 4px 4px 60px 8px rgba(0, 0, 0, 0.2);
			  }
			  form input[type=button] {
				margin-top: 10px;
				width: 150px;
				font-size: 1rem;
			  }
			  form input[type=button]:hover {
				cursor: pointer;
			  }
			  form input[type=button]:active {
				background: rgba(255, 255, 255, 0.2);
			  }
			 
			  ::-moz-placeholder {
				font-family: Montserrat, sans-serif;
				font-weight: 400;
				color: #fff;
				text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
			  }
			  
			  :-ms-input-placeholder {
				font-family: Montserrat, sans-serif;
				font-weight: 400;
				color: #fff;
				text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
			  }
			  
			  ::placeholder {
				font-family: Montserrat, sans-serif;
				font-weight: 400;
				color: #fff;
				text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
			  }
			  
			 
			  .a,
			  input:focus,
			  select:focus,
			  textarea:focus,
			  button:focus {
				outline: none;
			  }
			</style>

</head>
<body>
<div id="menu"><h1 style="color: #fff;">GRANT CMS</h1>
<form action="grantcms.php" id="myform" method="POST">
<select name="pagename">');
// Создаем список страниц в корневой папке доступных для редактирования
$filelist1 = glob("*.html");
$ddd=0;
$ssss='';
for ($j=0; $j<count($filelist1); $j++) {
	if($filelist1[$j]==$_SESSION['pagename']){
		$ssss.=('<option selected>'.$filelist1[$j].'</option>');
		$ddd=1;
	} else {
		$ssss.=('<option>'.$filelist1[$j].'</option>');
	};
};
if($ddd==0){
	$ssss='';
	for ($j=0; $j<count($filelist1); $j++) {
		if($filelist1[$j]=='index.html'){
			$ssss.=('<option selected>'.$filelist1[$j].'</option>');
			$ddd=1;
		} else {
			$ssss.=('<option>'.$filelist1[$j].'</option>');
		};
	};
};
echo($ssss);
echo('</select>
<input type="submit" value="Редактировать" title="Редактировать">
</form>
<a class="a"  href="grantcms.php?mode=0">Тексты</a>
<a  class="a" href="grantcms.php?mode=7">Картинки</a>
<a  class="a" href="grantcms.php?mode=5">HTML</a>
<a class="a"  href="grantcms.php?mode=8">CSS и JS</a>
<a class="a"  href="index.html" target="_blank">На сайт</a>
<a class="a" href="grantcms.php">Помощь</a>
</br></br></br></br>

');

//******************************************************************************************
// Список картинок
if($_GET['mode']=='7'){
	// Вытаскиваем список картинок из HTML кода
	$imgreg = "/[\"|\(']((.*\\/\\/|)([\\/a-z0-9_%]+\\.(jpg|png|gif)))[\"|\)']/"; 
	preg_match_all($imgreg, $template, $imgmas);
	for ($j=0; $j< count($imgmas[1]); $j++) {
		$imgname=trim($imgmas[1][$j]);
		echo('<div class="kartinka"><a href="grantcms.php?mode=1&img='.$imgname.'"><img src="'.$imgname.'?'.rand(1, 32000).'"></a><br>'.$imgname.'<br>');
		if(file_exists($imgname)){
			$size = getimagesize ($imgname); echo "Размер картинки: $size[0] * $size[1]"."<p>";
		} else { echo("Картинка не загружена"); };
		echo("</div>");
	};
	// Получаем список CSS файлов в массив $mycss	
	$mycss = array();
	$cssreg = "/[\"']((.*\\/\\/|)([\\/a-z0-9_%]+\\.(css)))[\"']/"; 
	preg_match_all($cssreg, $template, $cssmas);
	for ($j=0; $j< count($cssmas[1]); $j++) {
		array_push($mycss, trim($cssmas[1][$j]));
	};
	echo('<hr>');
	// Вытаскиваем с каждого CSS файла адреса картинок
	for ($i=0; $i< count($mycss); $i++) {
		$template=file_get_contents($mycss[$i]);
		$imgreg = "/[.\(]((.*\\/\\/|)([\\/a-z0-9_%]+\\.(jpg|png|gif)))[\)]/"; 
		preg_match_all($imgreg, $template, $imgmas);
		for ($j=0; $j< count($imgmas[1]); $j++) {
			$imgname=trim($imgmas[1][$j]);
			echo('<div class="kartinka"><a href="grantcms.php?mode=1&img='.$imgname.'"><img src="'.$imgname.'?'.rand(1, 32000).'"></a><br>'.$imgname.'<br>');
			if(file_exists($imgname)){
				$size = getimagesize ($imgname); echo "Размер картинки: $size[0] * $size[1]"."<p>";
			} else { 
				if(file_exists(substr($imgname,1))){
					$size = getimagesize(substr($imgname,1)); echo "Размер картинки: $size[0] * $size[1]"."<p>";
				} else { 
					echo("Картинка не загружена"); 
				};		
			};
			echo("</div>");
		};
	};
};

//******************************************************************************************
// Одна картинка
if($_GET['mode']=='1'){
	$imgname=$_GET['img'];
	if($imgname[0]=='/'){
		$imgname=substr($imgname,1);
	};
	echo('<center><img src="'.$imgname.'" class="bigkartinka"><br>'.$imgname.'<p>');
	if(file_exists($imgname)){
		$size = getimagesize ($imgname); echo "Размер картинки: $size[0] * $size[1]"."<p>";
	} else { 
		if(file_exists(substr($imgname,1))){
			$size = getimagesize(substr($imgname,1)); echo "Размер картинки: $size[0] * $size[1]"."<p>";
		} else { 
			echo("Картинка не загружена"); 
		};		
	};
	echo('<form enctype="multipart/form-data" action="grantcms.php?mode=2&img='.$imgname.'" method="POST">Загрузить картинку с компьютера: <p><input name="userfile" type="file" required><p><input type="submit" style="width: 250px; height: 40px;" value="Начать загрузку" /></form>');	
};


//*****************************************************************************************
// Замена картинки
if($_GET['mode']=='2'){
	$imgname=$_GET['img'];
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $imgname)) {
		echo "<br><br><center>Файл был успешно загружен.<p><a href='grantcms.php'>Вернуться к списку картинок</a><p>ПРИ ПРОСМОТРЕ ИЗМЕНЕНИЙ НА САЙТЕ НЕ ЗАБУДЬТЕ ОБНОВИТЬ ЕГО СТРАНИЦУ В БРАУЗЕРЕ";
	};
};


//**************************************************************************************
//  Список текстовых фрагментов
if($_GET['mode']=='0'){
	// Помещаем в массив $ff все тексты из HTML кода
	$ff=array(); $content=preg_replace('/<[^>]+>/', '^', $template); $teksta = explode('^', $content);
	for ($j=0; $j< count($teksta); $j++) { if(strlen(trim($teksta[$j]))>1) $ff[]=(trim($teksta[$j])); };
	for ($j=0; $j< count($ff); $j++) { 
		echo('<a href="grantcms.php?mode=3&j='.$j.'" class="mytext">'.$ff[$j].'</a>');
	};
};


//***************************************************************************************
// Текстовый фрагмент
if($_GET['mode']=='3'){
	// Помещаем в массив $ff все текстовые фрагменты из HTML кода
	$ff=array(); $content=preg_replace('/<[^>]+>/', '^', $template); $teksta = explode('^', $content);
	for ($j=0; $j< count($teksta); $j++) { if(strlen(trim($teksta[$j]))>1) $ff[]=(trim($teksta[$j])); };
	$jj=$_GET['j'];
	$tektekst=$ff[$jj];
	$kol=1;
	for ($j=0; $j<$jj; $j++) { 
		$kol=$kol + substr_count($ff[$j],$tektekst);
	};
	echo('<div style="margin: 0 auto; text-align: center;"><form method="POST" action="grantcms.php?mode=4&j='.$jj.'"><br><br><h2>Редактирование текстового фрагмента</h2><br><br><textarea name="mytext">'.$tektekst.'</textarea><br><input style="width: 600px; margin-top: 10px; height: 50px;" type="submit" value="Заменить текст" title="Заменить текст"></form></div>');
};


//****************************************************************************************
// Редактирование текстового фрагмента
if($_GET['mode']=='4'){
	// Помещаем в массив $ff все текста из HTML кода
	$ff=array(); $content=preg_replace('/<[^>]+>/', '^', $template); $teksta = explode('^', $content);
	for ($j=0; $j< count($teksta); $j++) { if(strlen(trim($teksta[$j]))>1) $ff[]=(trim($teksta[$j])); };
	$jj=$_GET['j'];
	$tektekst=$ff[$jj];
	$kol=1;
	for ($j=0; $j<$jj; $j++) { 
		$kol=$kol + substr_count($ff[$j],$tektekst);
	};
	$subject=file_get_contents($pagename);
	function str_replace_nth($search, $replace, $subject, $nth)
	{
		$found = preg_match_all('/'.preg_quote($search).'/', $subject, $matches, PREG_OFFSET_CAPTURE);
		if (false !== $found && $found > $nth) {
			return substr_replace($subject, $replace, $matches[0][$nth][1], strlen($search));
		}
		return $subject;
	};
	$rez=str_replace_nth($tektekst, $_POST['mytext'], $subject, $kol-1);
	file_put_contents($pagename, $rez);
	echo "<br><br><center>Текст был успешно изменен.<p><a href='grantcms.php?mode=0'>Вернуться к списку текстов</a><p>ПРИ ПРОСМОТРЕ ИЗМЕНЕНИЙ НА САЙТЕ НЕ ЗАБУДЬТЕ ОБНОВИТЬ ЕГО СТРАНИЦУ В БРАУЗЕРЕ";
};


//*****************************************************************************************
// Форма для HTML кода
if($_GET['mode']=='5'){
	$template=htmlspecialchars(file_get_contents($pagename));
	echo('<div style="margin: 0 auto; text-align: center;"><form method="POST" action="grantcms.php?mode=6"><br><br><h2>Редактирование HTML кода</h2><br><br><textarea name="mytext" style="width: 90%; height: 500px;">'.$template.'</textarea><br><input style="width: 90%; margin-top: 10px; height: 50px;" type="submit" value="Заменить текст" title="Заменить текст"></form></div>');
};


//******************************************************************************************
//Редактирование HTML кода
if($_GET['mode']=='6'){
	file_put_contents($pagename, $_POST['mytext']);
};

//**************************************************************************************
// Получаем список CSS и JS файлов
if($_GET['mode']=='8'){
	echo('<br><h2>CSS и JS файлы относящиеся к '.$pagename.'</h2><p><br>');
	$cssreg = "/[\"']((.*\\/\\/|)([\\/a-z0-9_%]+\\.(css)))[\"']/"; 
	preg_match_all($cssreg, $template, $cssmas);
	for ($j=0; $j< count($cssmas[1]); $j++) {
	$rrr=trim($cssmas[1][$j]);
	if (!(strstr($rrr, "http"))) {
 	echo('<a class="cssjs" href="grantcms.php?mode=9&fl='.$rrr.'">'.$rrr.'</a><p>');
	};
	};
	$cssreg = "/[\"']((.*\\/\\/|)([\\/a-z0-9_%]+\\.(js)))[\"']/"; 
	preg_match_all($cssreg, $template, $cssmas);
	for ($j=0; $j< count($cssmas[1]); $j++) {
	$rrr=trim($cssmas[1][$j]);
	if (!(strstr($rrr, "http"))) {
	echo('<a class="cssjs"  href="grantcms.php?mode=9&fl='.$rrr.'">'.$rrr.'</a><p>');
	};
	};
};

//******************************************************************************************
// Форма для HTML кода
if($_GET['mode']=='9'){
	$template=htmlspecialchars(file_get_contents($_GET['fl']));
	echo('<div style="margin: 0 auto; text-align: center;"><form method="POST" action="grantcms.php?mode=10&fl='.$_GET['fl'].'"><br><br><h2>Редактирование кода</h2><br><br><textarea name="mytext" style="width: 90%; height: 500px;">'.$template.'</textarea><br><input style="width: 90%; margin-top: 10px; height: 50px;" type="submit" value="Заменить текст" title="Заменить текст"></form></div>');
};

//******************************************************************************************
//Редактирование всего HTML кода
if($_GET['mode']=='10'){
	file_put_contents($_GET['fl'], $_POST['mytext']);
};

//******************************************************************************************
/*
		
░██████╗░██████╗░░█████╗░███╗░░██╗████████╗  ██████╗░░█████╗░██╗░░░░░░█████╗░██╗░░░██╗░█████╗░███╗░░██╗
██╔════╝░██╔══██╗██╔══██╗████╗░██║╚══██╔══╝  ██╔══██╗██╔══██╗██║░░░░░██╔══██╗╚██╗░██╔╝██╔══██╗████╗░██║
██║░░██╗░██████╔╝███████║██╔██╗██║░░░██║░░░  ██████╦╝███████║██║░░░░░██║░░██║░╚████╔╝░███████║██╔██╗██║
██║░░╚██╗██╔══██╗██╔══██║██║╚████║░░░██║░░░  ██╔══██╗██╔══██║██║░░░░░██║░░██║░░╚██╔╝░░██╔══██║██║╚████║
╚██████╔╝██║░░██║██║░░██║██║░╚███║░░░██║░░░  ██████╦╝██║░░██║███████╗╚█████╔╝░░░██║░░░██║░░██║██║░╚███║
░╚═════╝░╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚══╝░░░╚═╝░░░  ╚═════╝░╚═╝░░╚═╝╚══════╝░╚════╝░░░░╚═╝░░░╚═╝░░╚═╝╚═╝░░╚══╝
	*/
// Помощь
if(!isset($_GET['mode'])){
	echo('<div id="help" style="color: #fff;"><p><br><h2>GRANT CMS (версия 0.1)</h2><p>Данная CMS состоит всего из одного файла grantcms.php и предназначена для управления уже готовыми лэндингами, состоящими из HTML страницы, и подключенных к ней CSS файлов.<p>	С помощью данной CMS вы можете редактировать текста, и заменять картинки, изменять HTML код, JS и CSS вашего лэндинга.<p>CMS не требует установки, достаточно положить файл grantcms.php в каталог рядом с файлом index.html и использовать админку по ссылке сайт/grantcms.php <p>Разработчик:<a href="https://grant-baloyan.netlify.app/" style="color: #fff;">GRANT</a> </div><!--
		
	░██████╗░██████╗░░█████╗░███╗░░██╗████████╗  ██████╗░░█████╗░██╗░░░░░░█████╗░██╗░░░██╗░█████╗░███╗░░██╗
	██╔════╝░██╔══██╗██╔══██╗████╗░██║╚══██╔══╝  ██╔══██╗██╔══██╗██║░░░░░██╔══██╗╚██╗░██╔╝██╔══██╗████╗░██║
	██║░░██╗░██████╔╝███████║██╔██╗██║░░░██║░░░  ██████╦╝███████║██║░░░░░██║░░██║░╚████╔╝░███████║██╔██╗██║
	██║░░╚██╗██╔══██╗██╔══██║██║╚████║░░░██║░░░  ██╔══██╗██╔══██║██║░░░░░██║░░██║░░╚██╔╝░░██╔══██║██║╚████║
	╚██████╔╝██║░░██║██║░░██║██║░╚███║░░░██║░░░  ██████╦╝██║░░██║███████╗╚█████╔╝░░░██║░░░██║░░██║██║░╚███║
	░╚═════╝░╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚══╝░░░╚═╝░░░  ╚═════╝░╚═╝░░╚═╝╚══════╝░╚════╝░░░░╚═╝░░░╚═╝░░╚═╝╚═╝░░╚══╝
		-->');
};

echo('</body></html>');
};
?>
