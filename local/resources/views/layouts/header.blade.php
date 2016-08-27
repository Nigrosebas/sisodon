

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sis Odon</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Desconectarse</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{asset('home')}}"><i class="fa fa-fw fa-calendar"></i> Agenda</a>
                    </li>
                    <li>
                        <a href="{{asset('pacientes')}}"><i class="fa fa-fw fa-user-plus"></i> Nuevos Pacientes</a>
                    </li>
                    <li>
                        <a href="{{asset('pacientes')}}"><i class="fa fa-fw fa-file-text"></i> Fichas Pacientes</a>
                    </li>
                    <li>
                        <a href="{{asset('acciones')}}"><i class="fa fa-fw fa fa-hashtag"></i> Acciones</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>