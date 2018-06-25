<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Calendarización</title>
    
    <meta name="description" content="with draggable and editable events" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('fonts/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
    
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{asset('css/jquery-ui.custom.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/fullcalendar.min.css')}}" />
    
    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('css/fonts.googleapis.com.css')}}" />
    
    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
    
    
    <link rel="stylesheet" href="{{asset('css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ace-rtl.min.css')}}" />
    <script src="{{asset('js/ace-extra.min.js')}}"></script>
</head>

<body class="no-skin">

    @include('backend.includes.partials.navbar')

<div class="main-container ace-save-state" id="main-container">
    
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {}
    </script>
    
    
    @include('backend.includes.partials.sidebar')
    
    @yield('content')
    
    @include('backend.includes.partials.footer')
    
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div>
<!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

<!-- <![endif]-->

<!--[if IE]>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" +
        "<" + "/script>");
</script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- page specific plugin scripts -->
<script src="{{asset('js/jquery-ui.custom.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/bootbox.js')}}"></script>

<!-- ace scripts -->
<script src="{{asset('js/ace-elements.min.js')}}"></script>
<script src="{{asset('js/ace.min.js')}}"></script>

@yield('after-scripts')

</body>

</html>