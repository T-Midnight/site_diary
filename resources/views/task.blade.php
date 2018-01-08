<html>
  <head>
    
	<link rel="stylesheet" href={{URL::asset('css/main.css')}}>
	<link rel="stylesheet" href={{URL::asset('css/task.css')}}>
	<link rel="stylesheet" href={{URL::asset('css/craftyslide.css')}}>
	<link rel="stylesheet" href={{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css')}}>
	<link rel="stylesheet" href={{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css')}}>

		<script type="text/javascript" src={{ URL::asset('http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js') }}></script>
	<script type="text/javascript" src={{ URL::asset('js/craftyslide.min.js') }}></script>
	<script type="text/javascript" src={{ URL::asset('js/arrow.js') }}></script>
	<script type="text/javascript" src={{ URL::asset('js/menu.js') }}></script>

	
    <title>Электронный дневник школьника</title>

  </head>
  <body>
	<div class="container-fluid header">
		<p> <a href="index.php">Электронный дневник школьника</a></p>
    </div>
	<div class="container">
		<div class="col-sm-2">
			<nav class="nav-sidebar">
				<ul class="nav tabs">
					<li class=""><a href="/index.php">Личные данные</a></li>
						<li class=""><a href="/spisok">Список группы</a></li>      
						<li class="active"><a href="/task">Домашнее задание</a></li>   		  
				</ul>
			</nav>
		</div>
		<!-- tab content -->
		<div class="tab-content">
			<div class=" active">
				<div class="col-xs-12 col-md-4 col-sm-6 task">
					Задача 1
					Пятеро каменщиков вначале рабочей недели получили равное количество кирпича. 
					Когда трое из них израсходовали по 326 кирпичей, то у них осталось столько кирпичей, 
					сколько вначале получили другие два каменщика. Сколько всего кирпичей получили 
					каменщики вначале недели?
					Задача 2
					Токарь и его ученик вместе за смену выточили 130 деталей. Сколько деталей выточил 
					каждый из них, если часть деталей, которую выточил токарь, уменьшенная в 3 раза, 
					была равна деталям, которые выточил ученик, увеличенным в 4 раза?
				</div>
				<div class=" answer">
					<form name="task" id="task" method="post" action="/send">
					<input name="_method" type="hidden" value="post">
                                {{ csrf_field() }}
						<p><b>Фамилия:</b><br>
						<input type="text" name="name" size="50">
						
						<p><b>Решение задач:</b> <Br>
							<textarea name="text">
							</textarea>
						</p>
						<input type="submit"  name="nazvanie_knopki" value="Отправить" >
						
					</form>

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
    
