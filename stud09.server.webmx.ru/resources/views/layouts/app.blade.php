<!doctype html> 
<html lang="ru">
	<head> 
		<meta charset="UTF-8">
		<title>Весёлый сайтик</title> 
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css"><!--подключаем файл стилей-->
	</head>
	
	<body>
			<!--<nav>
				<ul class="menu">
					<li><a href="/">ГЛАВНАЯ</a></li>
					<li><a href="/velikie-muzei">БЛОГ</a>
					<li><a href="/novosti">НОВОСТИ</a>	
					<li><a href="/zhivopis">ЖИВОПИСЬ</a>
						<ul class="submenu">
							<li><a href="/zhivopis/russkaya-zhivopis">ГРАФФИТИ</a></li>
							<li><a href="/zhivopis/ispanskaya-zhivopis">ГРАФИЧЕСКАЯ</a></li>
							<li><a href="/zhivopis/italyanskaya-zhivopis">ИЗОБРАЗИТЕЛЬНАЯ</a></li>
						</ul>
					</li>  
					<li><a href="/console">КОНСОЛЬ</a></li>
				</ul>
			</nav>-->
 <nav>

  <ul class="menu">
  @foreach($menu_data as $item)
  
  @if($item->parent==0)
  <li><a href="/{{$item->name}}">{{$item->title}}</a>
  	<ul class="submenu">
  
  	<?php 
  	$attachdata = DB::table("posts")->where("parent", "=", $item->id)->get();  
  	?>
  	@if($attachdata !=null)
     @foreach($attachdata as $parentss)
      <li><a href="/{{$parentss->name}}">{{$parentss->title}}</a></li>
     @endforeach
  	@endif
  	</ul>
  @endif

	</li>
		@endforeach	
		<li><a href="/console">КОНСОЛЬ</a></li>

  	</ul>
</nav> 

		<header><!--шапка сайта-->
			<div>
			<div>
		</header>

			 <!--блок навигации, одинаковый для все страниц сайта-->
								
			<!--блок содержит раздел навигации и контент страницы-->		
			<div class="wrapper">			
			<div class="content"> 
				<div class="row">

					@yield('content')

				</div>
			</div>			
		</div>
		
		<footer><!--подвал сайта-->
		<div>
			<p><i>Было разработано в рамках Практики студентом группы ПР-31 :)</i></p>
		</div>
		</footer>
	</body>
</html>