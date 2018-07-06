<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	@yield('title')

	@yield('css')
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
            <link href="{{asset('/Templates/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('/Templates/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('/Templates/css/admin.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="horizontal-navigation">
@yield('popUp')

@unless($index==4) <!--= No se muestra la cabecera-->
<div class="row center">
    <!--\\\\\\\ header Start \\\\\\-->
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar"> 
        <div class="row center">
            <div class="col-lg-3">
                <section>
                    <div>
                        <img src="{{asset('/Templates/img/IPN.png')}}" width="50" height="50">
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section>
                    <div><strong>{{config('globalInfo.nombreUpiiz')}}</strong></div>
                </section>
                <section>
                    <div><strong>{{config('globalInfo.nombreUpiiz2')}}</strong></div>
                </section>
            </div>
            <div class="col-lg-3">
                <section>
                    <div>
                        <img src="{{asset('/Templates/img/6.png')}}" width="40" height="50">
                    </div>
                </section>
            </div>
       </div>
    </div>
  </div>

	<div class="page-content">
		<div class="container-fluid">
		@include('alerts.formError')
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
