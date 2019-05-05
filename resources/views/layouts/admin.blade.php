<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="Websites Apps Mobile Apps CCTV CBT">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <title>{{ config('app.name', 'Laravel') }}  @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />


    <!--external css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-fileupload/bootstrap-fileupload.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-datepicker/css/datepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-timepicker/compiled/timepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-colorpicker/css/colorpicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-datetimepicker/css/datetimepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jquery-multi-select/css/multi-select.css') }}" />


    <link href="{{ asset('assets/advanced-datatable/media/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/advanced-datatable/media/css/demo_table.css') }}" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
    @include('includes.admin-header')
      <!--sidebar start-->
    @include('includes.admin-sidebar')
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
            @include('includes.message')
            @yield('content')
        </section>
      </section>
      <!--main content end-->
      <!--footer start-->
    @include('includes.admin-footer')
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.sparkline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}" ></script>
    <script src="{{ asset('js/jquery.customSelect.min.js') }}" ></script>
    <script src="{{ asset('js/respond.min.js') }}" ></script>


    <!--this page plugins-->

  <script type="text/javascript" src="{{ asset('assets/fuelux/js/spinner.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/bootstrap-fileupload/bootstrap-fileupload.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/bootstrap-daterangepicker/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/jquery-multi-select/js/jquery.multi-select.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/jquery-multi-select/js/jquery.quicksearch.js') }}"></script>


  <script type="text/javascript" src="{{ asset('assets/advanced-datatable/media/js/jquery.dataTables.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    <!--common script for all pages-->
    <script src="{{ asset('js/common-scripts.js') }}"></script>

    <!--script for this page-->
    <script src="{{ asset('js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('js/count.js') }}"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });

                  $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
