<html>
  <head>
    
	<link rel="stylesheet" href={{URL::asset('css/main.css')}}>

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
	<div class="page-wrapper">
		<div class="container-fluid header">
			<p> <a href="index.php">Электронный дневник школьника</a></p>
		</div>
		<div class="container">
			<div class="col-sm-2">
				<nav class="nav-sidebar">
					<ul class="nav tabs">
						<li class="active"><a href="/index.php">Личные данные</a></li>
						<li class=""><a href="/spisok">Список группы</a></li>      
						<li class=""><a href="/task">Домашнее задание</a></li>   		  
					</ul>
				</nav>
			</div>
			<!-- tab content -->
			<div class="tab-content">
				<div class=" active">
					<div class="col-xs-12 col-md-4 col-sm-6">
						<img src="images/Maria.jpg" class="img-rounded img-responsive photo"> 
					</div>
					<div class=" text-style">
						<h2>Михайлова Мария</h2>
						<p>
							Ученица 5-го класса Б школы № 67 в городе Ульяновске. Мария - удивительно талантливая девочка, 
							проявляет активную жизненную позицию. Круглая отличница.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 achievements">
					<h2>Достижения</h2>
					<div id="slideshow">
						<ul>
							<li><img title="Благодарственное письмо от директора школы" src="images/Blagodarnoct.jpg" alt="Благодарственное письмо" /></li>
							<li><img title="Грамота за первое место в конкурсе вышивок крестиком" src="images/Gramota.jpg" alt="Грамота" /></li>
							<li><img title="Диплом международных соревнований по теннису" src="images/diplom.jpg" alt="Диплом" /></li>
						</ul>
					</div>
					<script type="text/javascript">
						$("#slideshow").craftyslide({
							'width': 200,
							'height': 300,
							'pagination': true,
							'fadetime': 500,
							'delay': 100
						});
					</script>

				</div>
			</div>
		</div>
		<div class="page-buffer"></div>
	</div>
	<a href="#" class="scrollup">Наверх</a>
    <footer  class="page-footer">
		<div id="footer" class="footer container-fluid">
			<div id="footer-copyrite">
				<p>Copyright © 2017 Белоусова Татьяна ПИбд-31</p> 
			</div>
		</div>
	</footer>
  </body>
</html>
    
