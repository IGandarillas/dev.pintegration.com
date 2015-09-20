<!doctype html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <title>Prueba</title>
{!! Html::style('assets/css/styles.css') !!}
{!! Html::style('assets/css/bootstrap.css') !!}
 </head>
 <body>
 <div class="container">
	 @yield('content')
</div>
<!-- Scripts -->
{!! Html::script('assets/js/bootstrap.min.js') !!}
 </body>
</html>
