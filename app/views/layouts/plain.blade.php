<!DOCTYPE HTML>
<html>
<head>
<title>Naasla Handicraft</title>
<link rel="shortcut icon" href="assets/buyShop/images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flatro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
{{HTML::style('assets/buyShop/css/bootstrap.css')}}
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
{{HTML::style('assets/buyShop/css/style.css')}}
<link href="" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

{{ HTML::style('assets/custom/custom.css') }}

{{HTML::script('assets/buyShop/js/jquery-1.11.1.min.js')}}

<!-- start menu -->
{{HTML::style('assets/buyShop/css/megamenu.css')}}

{{HTML::script('assets/buyShop/js/megamenu.js')}}

<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});
});
</script>
</head>
<body>

 @include('layouts.header')

@include('layouts.leftbar')

@yield('content')





</body>
</html>