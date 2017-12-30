
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset(Auth::user()->avatar)}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">   
                    <p>hola  {{Auth::user()->nombres_Docentes}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif


        
        <!-- Funciones para el administrador  -->
        @if (Shinobi::isRole('administrador'))
            <ul class="sidebar-menu">
                <li class="header">FUNCIONES DEL ADMINISTRADOR</li>
                <!-- Optionally, you can add icons to the links -->
            
                <li class="treeview">
                    <a href="#"><i class='fa fa-users'></i> <span>Roles de Docentes</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('listado_docentes') }}">Docentes</a></li>
                        <li><a href="#"></a></li>
      
                    </ul>
                </li>
                <li>
                    <a href="#"><i class='fa fa-users'></i> <span>Cancelación de Cuotas</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('listado_alumnos') }}">Alumnos</a></li>
                        <li><a href="#"></a></li>
      
                    </ul>
                </li>
            </ul><!-- /.sidebar-menu -->
        @endif
        

        <!-- Funciones para el docente  -->
        @if(Shinobi::isRole('docente'))
            <ul class="sidebar-menu">
                <li class="header">FUNCIONES DEL DOCENTE</li>
                <!-- Optionally, you can add icons to the links -->
     
                <li class="treeview">
                    <a href="#"><i class='fa fa-users'></i> <span>Docentes</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">Funcion1</a></li>
                        <li><a href="#">Funcion2</a></li>
                    </ul>
                </li>
            </ul><!-- /.sidebar-menu -->
        @endif
            
         <!-- Funciones para el alumno  -->
        @if(Shinobi::isRole('alumno'))
            <ul class="sidebar-menu">
                <li class="header">FUNCIONES DEL ALUMNO</li>
                <!-- Optionally, you can add icons to the links -->
     
                <li class="treeview">
                    <a href="#"><i class='fa fa-users'></i> <span>Alumnos</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">función 1 </a></li>
                        <li><a href="#">función 2</a></li>
                    </ul>
                </li>
            </ul><!-- /.sidebar-menu -->
        @endif
    </section>
    <!-- /.sidebar -->
</aside>
