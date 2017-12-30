<!DOCTYPE html>
<html>

 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Ingreso al sistema</title>
 
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('font-awesome/css/fonts/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('plugins/iCheck/square/blue.css')}}">
   
   
  </head>


@yield('content')

<script src="{{ url('js/bootstrap.min.js')}}"></script>

 <script src="{{ url('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ url('plugins/iCheck/icheck.min.js') }}"></script>
</html>