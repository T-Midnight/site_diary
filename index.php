<html>
  <head>
    <link rel = "stylesheet" type= "text/css"  href = "main.css"/>
	<link rel="stylesheet" type= "text/css" href="craftyslide.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="js/craftyslide.min.js"></script>
	
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
						<li class="active"><a href="index.php">Личные данные</a></li>
						<li class=""><a href="spisok.php">Список группы</a></li>
						<li class=""><a href="#tab3" data-toggle="tab">Оценки</a></li>                 
						<li class=""><a href="tasks.php">Домашнее задание</a></li>   		  
					</ul>
				</nav>
			</div>
			<!-- tab content -->
			<div class="tab-content">
				<div class=" active">
					<div class="col-xs-12 col-md-4 col-sm-6">
						<img src="Maria.jpg" class="img-rounded img-responsive photo"> 
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
				<div class="col-sm-4 col-sm-offset-7 col-md-4 col-md-offset-7 achievements">
					<h2>Достижения</h2>
					<div id="slideshow">
						<ul>
							<li><img title="Благодарственное письмо от директора школы" src="images/благодарность.jpg" alt="Благодарственное письмо" /></li>
							<li><img title="Грамота за первое место в конкурсе вышивок крестиком" src="images/грамота.jpg" alt="Грамота" /></li>
							<li><img title="Диплом международных соревнований по теннису" src="images/диплом.jpg" alt="Диплом" /></li>
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
					<script>
						jQuery.noConflict();
					</script>

				</div>
			</div>
		</div>
		<div class="page-buffer"></div>
	</div>
    <footer  class="page-footer">
		<div id="footer" class="footer container-fluid">
			<div id="footer-copyrite">
				<p>Copyright © 2017 Белоусова Татьяна ПИбд-31</p> 
			</div>
		</div>
	</footer>
  </body>
</html>
    
