<?php
	$cols = rand(1,10);
	$rows =rand(1,10);
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Таблица умножения</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<span class="slogan">Знания - сила</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1>Таблица умножения</h1>
			<?php
    			echo "<table border='1'>\n";
    			for($r=1;$r<=$rows;$r++){
        			echo "<tr>\n";
        			for($c=1; $c<=$cols; $c++){
            			if($r==1 || $c==1){echo "\t\t<th style='background:red'>".$r*$c."</th>\n";}
            			else{echo "\t\t<td>".$r*$c."</td>\n";}
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<!-- Таблица -->
			
			<!-- Таблица -->
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
			<ul>
				<li><a href='index.php'>Домой</a></li>
				<li><a href='about.php'>О нас</a></li>
				<li><a href='contact.php'>Контакты</a></li>
			</ul>
			<!-- Меню -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy; Веб-мастер, 2017
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>