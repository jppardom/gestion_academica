@extends('layouts.auth')

@section('content')

<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
       <img  href="#" src="{{ url('img/logo.png') }} " class="img-responsive" />
      </div><!-- /.login-logo -->
      <div class="login-box-body">

            @if (count($errors) > 0)
                 <div class="col-sm-12" >
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Error de Accesso 
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                </div>
                @endif
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
                <p class="login-box-msg">Ingrese al sistema</p>
        <form role="form" action="{{ url('/login') }}" method="post" >
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
          <div class="form-group has-feedback">
             <input type="text" name="usuario" value="{{ old('usuario') }}" placeholder="Usuario..." class="form-control" id="form-username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" placeholder="Contraseña..." class="form-control" id="form-password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
         
          <div class="row">
            

            
            <div class="login-box-msg">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div><!-- /.col -->
              <a  class="form-group" href="{{ url('/register') }}">Quiero registrarme</a><br/>
              <a  href="{{ route('password.request') }}">Olvide mi contraseña</a>
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>

@endsection





