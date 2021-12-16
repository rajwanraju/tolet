<!DOCTYPE HTML>
<html>
<head>
<title>
	@yield('title')
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Realist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('public/frontEnd/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('public/frontEnd/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('public/frontend/js/scripts.js')}}" type="text/javascript"></script>
<!-- Custom Theme files -->
<link href="{{asset('public/frontEnd/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Grand+Hotel:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet:100,300,400,500,600,700,800,900' type='text/css'>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script

<!-- Menu -->
<script src="{{asset('public/frontEnd/js/responsiveslides.min.js')}}"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>






<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrapcdn/3.3.6/css/bootstrap.min.css">
<script src="https:??ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<link rel="stylesheet" href="{{asset('public/frontEnd/fonts/css/font-awesome.min.css')}}">

<script src="{{asset('public/frontEnd/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
</script>	
</head>
<body>
<script src="{{asset('public/tinymce/jquery.tinymce.min')}}"></script>
<script src="{{asset('public/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('public/dist/tinymce/jquery.tinymce.min')}}"></script>
 <script>tinymce.init({ selector:'textarea' });</script>


@include('frontEnd.includes.header')



@yield('mainContent')



<script type="text/javascript">
	$('#search').on('keyup',function(){
		$value=$(this).val();
		$.ajax({
			type : 'get',
			url  :'{{URL::to('search')}}',
			data : {'search':$value},
			success:function(data){
				$('tbody').html(data);
			}
		});
	})
</script>

@include('frontEnd.includes.footer')
 		