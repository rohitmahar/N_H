x<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Naasla Handicraft</title>

    <!-- Bootstrap core CSS -->

    {{HTML::style('assets/dashGum/css/bootstrap.css')}}
    <!--external css-->

    {{HTML::style('assets/dashGum/font-awesome/css/font-awesome.css')}}


    {{HTML::style('assets/dashGum/lineicons/style.css')}}


    <!-- Custom styles for this template -->
    {{HTML::style('assets/dashGum/css/style.css')}}
    {{HTML::style('assets/dashGum/css/style-responsive.css')}}

    {{HTML::script('assets/dashGum/js/chart-master/Chart.js')}}


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
     @include('layouts.adminHeader')
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      @include('layouts.adminSidebar')
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      @yield('content')


      <!--main content end-->
      <!--footer start-->
      {{--@include('layouts.adminFooter')--}}
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    {{HTML::script('assets/dashGum/js/jquery.js')}}
    {{HTML::script('assets/dashGum/js/jquery-1.8.3.min.js')}}
    {{HTML::script('assets/dashGum/js/bootstrap.min.js')}}

    {{HTML::script('assets/dashGum/js/jquery.dcjqaccordion.2.7.js', array('class' => 'include'))}}

    {{HTML::script('assets/dashGum/js/jquery.scrollTo.min.js')}}
    {{HTML::script('assets/dashGum/js/jquery.nicescroll.js')}}
    {{HTML::script('assets/dashGum/js/jquery.sparkline.js')}}
    {{HTML::script('assets/dashGum/lineicons/Ite-ie7.js')}}



    <!--common script for all pages-->
    {{HTML::script('assets/dashGum/js/common-scripts.js')}}



    <!--script for this page-->
    {{HTML::script('assets/dashGum/js/sparkline-chart.js')}}





	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event"}
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


  </body>
</html>
