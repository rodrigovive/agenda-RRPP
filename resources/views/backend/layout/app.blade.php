<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Agenda Virtual | Auditorio Central</title>
    
    <!-- Bootstrap core CSS-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
    
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{asset('css/karen.css')}}" rel="stylesheet">
    <link rel='stylesheet' href="{{asset('css/fullcalendar.min.css')}}">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/rpplomo.png')}}">
    
    <!-- calendario -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <script src='{{asset('js/jquery.min.js')}}'></script>
    <script src='{{asset('js/moment.min.js')}}'></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.print.css" media='print'/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<!-- Navigation-->
@include('backend.includes.partials.navbar')

<div class="content-wrapper">
    @yield('content')
    <!-- eventos -->
    
    <div id='calendar-container'>
        <div id="calendarioweb"></div>
    </div>
    
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('backend.includes.partials.footer')
        <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top" title="Subir">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal (agregar, modificar, Eliminar) -->
    @yield('modal-create')


    <!-- Bootstrap core JavaScript-->
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{asset('js/jquery.easing.min.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin.min.js')}}"></script>
    
        <!-- calendario -->
        <script src="{{asset('js/fullcalendar.min.js')}}"></script>
        <script src='{{asset('js/es.js')}}'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
        @yield('after-scripts')

</div>
</body>

</html>