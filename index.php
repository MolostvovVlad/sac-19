<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/block1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="row">
	<div class="menu">
		<div style="width: 100%;">
			<button class="menublock" style="outline: none; margin-top: 10%;">
				<p class="menutext">COVID-19</p>
			</button>
			<a href="http://covid-19/servis.php">
				<button class="menublock" style="outline: none;">
					<p class="menutext">Сервисы</p>
				</button>
			</a>
			<a href="http://covid-19/map.php">
				<button class="menublock" style="outline: none;">
						<p class="menutext">Карта</p>
				</button>
			
			<button class="menublock" style="outline: none;">
				<p class="menutext">Советы</p>
			</button>
			<button class="menublock" style="outline: none; margin-bottom: 10%;">
				<p class="menutext">тест</p>
			</button>
		</div>
	</div>
	<div>
		
		<div class="logo1 font-weight-bold"></div>
		<img src="img/logo.png" class="textblur" style="width:256px;">
		<div class="info">
			<h1 style="text-align: center;">Добро пожаловать на sac19</h1>
			<h4 style="text-align: center;">На сайте вы можете узнать больше о коронавирусе , быстро и удобно перейти на нужный вым онлайн сервис , посмотреть чем можнон заняться на карантине , и пройти тест на проверку знаний о коронавирусе</h4>
		</div>
	</div>
</div>

<script type="">
let logo = document.querySelector(".logo1");   
let info = document.querySelector(".info");
let text = document.querySelector(".textblur");        
let proverka = function() {
 logo.style.top = "10%";
 text.style.top = "14%";
 info.style.bottom = "2%";
};
 setTimeout(proverka,1000)
</script>

</body>
</html>