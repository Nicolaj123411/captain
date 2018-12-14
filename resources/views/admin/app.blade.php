<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('admin/assets/img/logo-fav.png')}}">
    <title>Admin panel</title>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/lib/jqvmap/jqvmap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header"><a href="index.html" class="navbar-brand"></a>
          </div>

        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                <li class="active"><a href="{{ route('index') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-home"></i><span>Houses</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{route('house', '1')}}">Heimatmuseum</a>
                      </li>
                      <li><a href="{{route('house', '2')}}">Altfriesisches Haus</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      @yield('content')



        </div>
        <script src="{{ asset('admin/assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jquery-flot/jquery.flot.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jquery-flot/jquery.flot.pie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jquery-flot/jquery.flot.time.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jquery-flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jquery-flot/plugins/curvedLines.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jquery.sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/countup/countUp.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jqvmap/jquery.vmap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/lib/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/js/app-dashboard.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function(){
              //initialize the javascript
              App.init();
              App.dashboard();

          });
        </script>
      </body>
    </html>
