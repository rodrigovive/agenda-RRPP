<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">
        <img src="image/rpplomo.png" width="80" height="25">&nbsp;&nbsp;Auditorio Central</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Panel de Administración">
                <a class="nav-link" href="panelp.html">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Panel de Administración</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Usuarios">
                <a class="nav-link" href="usuarios.html">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Usuarios</span>
                </a>
            </li>
            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Calendario">
                <a class="nav-link" href="calendario.html">
                    <i class="fa fa-fw fa-calendar" aria-hidden="true"></i>
                    <span class="nav-link-text">Calendario</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Eventos">
                <a class="nav-link" href="listaeventos.html">
                    <i class="fa fa-fw fa-th-list" aria-hidden="true"></i>
                    <span class="nav-link-text">Lista de Eventos</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Galeria de Eventos">
                <a class="nav-link" href="galeriaeventos.html">
                    <i class="fa fa-fw fa-picture-o" aria-hidden="true"></i>
                    <span class="nav-link-text">Galeria de Eventos</span>
                </a>
            </li>
            <!-- opcion cambiar de lugar -->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Categorias">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-search"></i>
                    <span class="nav-link-text">Categorias</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href=".html">Aniversarios</a>
                    </li>
                    <li>
                        <a href=".html">Capacitaciones</a>
                    </li>
                    <li>
                        <a href=".html">Charlas</a>
                    </li>
                    <li>
                        <a href=".html">Conferencias</a>
                    </li>
                    <li>
                        <a href=".html">Congresos</a>
                    </li>
                </ul>
            </li>
            <!-- opcion cambiar de lugar -->
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <!--  inicio NavBar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alertas
              <span class="badge badge-pill badge-warning"></span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">Proximos Eventos:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-check fa-fw"></i>Congreso ESIQ</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">La Escuela Profesional ESIQ, presentara su ...</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-check fa-fw"></i>Congreso ESIQ</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">La Escuela Profesional ESIQ, presentara su ...</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-check fa-fw"></i>Congreso ESIQ</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">La Escuela Profesional ESIQ, presentara su ...</div>
                    </a>
                </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="image/teatro.jpg" class="rounded-circle" alt="Cinque Terre" width="23" height="23">
                    <span class="info">
              <small>Bienvenido,</small>&nbsp;Carlos</span>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">Perfil de Usuario:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="perfil.html">
                        <i class="fa fa-fw fa-user"></i>Perfil
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>