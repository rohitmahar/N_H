{{--<section id="container" >--}}
      {{--<!-- **********************************************************************************************************************************************************--}}
      {{--TOP BAR CONTENT & NOTIFICATIONS--}}
      {{--*********************************************************************************************************************************************************** -->--}}
      {{--<!--header start-->--}}
      {{--<header class="header black-bg">--}}
              {{--<div class="sidebar-toggle-box">--}}
                  {{--<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>--}}
              {{--</div>--}}
            {{--<!--logo start-->--}}
            {{--<a href="{{URL::route('dashboard')}}" class="logo" ><b style="background: pink;">Naasla Handicraft</b></a>--}}
            {{--<!--logo end-->--}}

            {{--<div class="top-menu">--}}
            	{{--<ul class="nav pull-right top-menu">--}}
                    {{--@if(Auth::check())--}}
                         {{--<li><a href="{{ URL::route('index') }}">Shop</a></li>--}}
                        {{--<li><a href="{{ URL::route('logout') }}">Logout</a></li>--}}
                    {{--@endif--}}
               	{{--</ul>--}}
            {{--</div>--}}
        {{--</header>--}}


      <!--header end-->


      <body class="hold-transition skin-blue sidebar-mini">
          <div class="wrapper" style="background-color:#fff;">
          <header class="main-header">
              <!-- Logo -->
              <a href="{{URL::route('dashboard')}}" class="logo">

                <span class="logo-lg"><b>Naasla</b> Handicraft</span>
              </a>

              <nav class="navbar navbar-static-top" role="navigation">
              <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                      @if(Auth::check())
                          <li><a href="{{ URL::route('index') }}">Shop</a></li>
                          <li><a href="{{ URL::route('logout') }}">logout</a></li>
                      @endif

                  </ul>
              </div>
              </nav>


          </header>