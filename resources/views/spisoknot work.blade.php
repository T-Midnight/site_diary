<html>
  <head>
    
	<link rel="stylesheet" href={{URL::asset('css/main.css')}}>

	<link rel="stylesheet" href={{URL::asset('css/craftyslide.css')}}>
	<link rel="stylesheet" href={{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css')}}>
	<link rel="stylesheet" href={{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css')}}>

		<script type="text/javascript" src={{ URL::asset('http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js') }}></script>
	<script type="text/javascript" src={{ URL::asset('js/craftyslide.min.js') }}></script>
	<script type="text/javascript" src={{ URL::asset('https://cdn.jsdelivr.net/npm/vue') }}></script>
	<script type="text/javascript" src={{ URL::asset('js/arrow.js') }}></script>
	<script type="text/javascript" src={{ URL::asset('js/menu.js') }}></script>
		

	
    <title>Электронный дневник школьника</title>
  </head>
  <body>
  <div id="app" >
	<div class="page-wrapper">
		<div class="container-fluid header">
			<p> <a href="index.php">Электронный дневник школьника</a></p>
		</div>
		<div class="container">
			<div class="col-sm-2">
				<nav class="nav-sidebar">
					<ul class="nav tabs">
						<li class=""><a href="index.php">Личные данные</a></li>
						<li class="active"><a href="spisok.php">Список группы</a></li>           
						<li class=""><a href="tasks.php">Домашнее задание</a></li>   		  
					</ul>
				</nav>
			</div>
			<div class = "row">
				<div class="spisok col-sm-6 col-md-6 col-xs-12">
					<table border ='1'>
					<tr><td>Фамилия</td><td>Имя</td><td>Телефон</td><td>Год Рождения</td></tr>
					
					<div v-for="element in result">
					<tr>
						<td>@{{ element.surname }}</td>
						<td>@{{ element.name }}</td>
						<td>@{{ element.phone }}</td>
						</td>
						<td>@{{ element.yearbirth }}</td></tr>
					</div>
				</div>	
				<div class="spisok col-sm-2 col-md-2 col-xs-12">
					<form name="query" id="query" method="post">
						<p><b>Введите год рождения ученика (от 1994 до 1997)</b><br>
						<input type="text" name="year"  size="4">
						<p><b>Выберите пол</b><br>
						<p><input name="dzen" type="radio" value="all" checked> Все</p>
						<p><input name="dzen" type="radio" value="boys"> Мальчики</p>
						<p><input name="dzen" type="radio" value="girls"> Девочки</p>
						<input type="submit"  name="nazvanie_knopki" value="Показать выбранных">
					</form>
					<?php
						if( isset( $_POST['nazvanie_knopki'] ) )
						{
							require_once 'connection.php'; 
							 
							$link = mysqli_connect($host, $user, $password, $database) 
								or die("Ошибка " . mysqli_error($link));
							 
							$query = "SET NAMES 'utf8'";
							mysqli_query($link,$query);
							$year = $_POST['year'];
							$query ="SELECT * FROM user WHERE yearbirth = '$year'";
							$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
							if($result)
							{
								echo ("<table border ='1'>");
								echo ("<tr><td>Фамилия</td><td>Имя</td><td>Телефон</td><td>Год Рождения</td></tr>");
								while ($tablerows = mysqli_fetch_row($result))
								{
									echo("<tr><td>$tablerows[1]</td>
										<td>$tablerows[2]</td>
										<td>$tablerows[4]</td>
										</td><td>$tablerows[5]</td></tr>");
								}
								echo "</table>";
							}
							 
							mysqli_close($link);
						}
					?>
					
				</div>	
			</div>
		</div>
	</div>
	<a href="#" class="scrollup">Наверх</a>
	
    <footer  class="page-footer">
		<div id="footer" class="footer container-fluid">
			<div id="footer-copyrite">
				<p>Copyright © 2017 Белоусова Татьяна ПИбд-31</p> 
			</div>
		</div>
	</footer>
	
	<script type="text/javascript">
                window.result = <?=json_encode($result);?>;
    </script>
	<script type="text/javascript" src={{ URL::asset('js/javas.js') }}></script>
	</div>
  </body>
</html>
    
