<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	@yield('title')

	@yield('css')

	<link href="{{asset('/Templates/img/favicon.144x144.png')}}" rel="apple-touch-icon" type="/image/png" sizes="144x144">
	<link href="{{asset('/Templates/img/favicon.114x114.png')}}" rel="apple-touch-icon" type="/image/png" sizes="114x114">
	<link href="{{asset('/Templates/img/favicon.72x72.png')}}" rel="apple-touch-icon" type="/image/png" sizes="72x72">
	<link href="{{asset('/Templates/img/favicon.57x57.png')}}" rel="apple-touch-icon" type="/image/png">
	<link href="{{asset('/Templates/img/favicon.png')}}" rel="icon" type="image/png">
	<link href="{{asset('/Templates/img/favicon.ico')}}" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <link rel="stylesheet" href="{{asset('/Templates/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/Templates/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('/Templates/css/bootstrap.min.css')}}">
    <link href="{{asset('/Templates/css/animate.css" rel="stylesheet" type="text/css')}}">
    <link href=""{{asset('/Templates/css/jquerysctipttop.css')}} rel="stylesheet" type="text/css">
</head>

<body class="horizontal-navigation">
@yield('popUp')

@unless($index==4) <!--= No se muestra la cabecera-->
<div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar"> 
      
      <span class="lbl hidden-md-down" style="font-size:15px;margin: 0 0 10px -90px;">{{config('globalInfo.nombreUpiiz')}}</span>
      <span class="lbl hidden-lg-up" style="font-size:15px">{{config('globalInfo.nombreUpiiz2')}}</span>
      
    </div>
  </div>

	<div class="page-content">
		<div class="container-fluid">
		@include('alerts.formError')
            <h3 class="with-border text-center">@yield('subHead')</h3>
            @yield('content')
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endunless

	<script src="{{asset('/Templates/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/Templates/js/jquery-2.1.0.js')}}"></script>
	<script src="{{asset('/Templates/js/common-script.js')}}"></script>
	<script src="{{asset('/Templates/js/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('/Templates/js/jPushMenu.js')}}"></script>
	<script src="{{asset('/Templates/js/side-chats.js')}}"></script>
	<script src="{{asset('/Templates/js/jquery.sparkline.js')}}"></script>
	<script src="{{asset('/Templates/js/graph.js')}}"></script>
	<script src="{{asset('/Templates/js/edit-graph.js')}}"></script>
	<script src="{{asset('/Templates/js/jPushMenu.js')}}"></script>
	<script src="{{asset('/Templates/js/side-chats.js')}}"></script>
	<script src="{{asset('/Templates/js/jquery.slimscroll.min.js')}}"></script>


	@yield('scripts')


    <script src="{{asset('/Templates/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/Templates/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
</body>
</html>
