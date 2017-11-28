<html>
  <head>
    <link rel = "stylesheet" type= "text/css"  href = "main.css"/>
	 <link rel = "stylesheet" type= "text/css"  href = "task.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="//web-ptica.ru/VRV-files/jquery-2.1.3.min.js "></script>
	<script src="js/arrow.js"></script>
	<script src="js/menu.js"></script>
	
    <title>Электронный дневник школьника</title>
	<style>
		.error {color: #FF0000;}
	</style>
  </head>
  <body>
	<div class="container-fluid header">
		<p> <a href="index.php">Электронный дневник школьника</a></p>
    </div>
	<div class="container">
		<div class="col-sm-2">
			<nav class="nav-sidebar">
				<ul class="nav tabs">
					<li class=""><a href="index.php">Личные данные</a></li>
					<li class=""><a href="spisok.php">Список группы</a></li>             
					<li class="active"><a href="tasks.php">Домашнее задание</a></li>   		  
				</ul>
			</nav>
		</div>
		<!-- tab content -->
		<div class="tab-content">
			<div class=" active">
				<div class="col-xs-12 col-md-4 col-sm-6 task">
					<?php
						$fp = fopen("task.txt", "r");
						if ($fp) 
						{
							while (!feof($fp))
							{
							$mytext = fgets($fp, 999);
							echo $mytext."<br />";
							}
						}
						else echo "Ошибка при открытии файла";
						fclose($fp);
					?>
				</div>
				<div class=" answer">
					<form name="task" id="task" method="post">
						<p><b>Фамилия:</b><br>
						<input type="text" name="name" size="50">
						
						<p><b>Решение задач:</b> <Br>
							<textarea name="text">
							</textarea>
						</p>
						<input type="submit"  name="nazvanie_knopki" value="Отправить">
					</form>
					<?php
					# Если кнопка нажата
						if( isset( $_POST['nazvanie_knopki'] ) )
						{
							$nameErr = "";
							$name = "";
							
							function test_input($data) {
								$data = trim($data);
								$data = stripslashes($data);
								$data = htmlspecialchars($data);
								return $data;
							}
							
							if (empty($_POST["name"])) {
								$nameErr = "Поле Фамилия не должно быть пустым";
								echo $nameErr;
							} else {
								$name = test_input($_POST["name"]);
								// check if name only contains letters and whitespace
								if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
								  $nameErr = "В поле Фамилия возможно вводить только буквы и пробелы"; 
								  echo $nameErr;
								} else {
									$fp = fopen("work.txt", "w"); // 
									fputs($fp, $_POST['name']);
									fputs($fp, "\r\n");
									fputs($fp, $_POST['text']);
									if (filesize("work.txt")!= 0) {
										echo 'Домашнее задание отправлено на проверку';
									}
									else echo 'Ошибка при записи в файл.';
									fclose($fp); //Закрытие файла
								}
							}
						}	
					?>
				</div>
			</div>
		</div>
	</div>
	<a href="#" class="scrollup">Наверх</a>
    <footer>
		<div id="footer" class="footer container-fluid">
			<div id="footer-copyrite">
				<p>Copyright © 2017 Белоусова Татьяна ПИбд-31</p> 
			</div>
		</div>
	</footer>
  </body>
</html>
    
