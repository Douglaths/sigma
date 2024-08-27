<main class="app-content">

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo">SIGMA SOFT</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Show notifications"><i class="bi bi-bell fs-5"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">Tienes notificaciones nuevas</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-envelope fs-4 text-primary"></i></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-exclamation-triangle fs-4 text-warning"></i></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-cash fs-4 text-success"></i></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-envelope fs-4 text-primary"></i></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-exclamation-triangle fs-4 text-warning"></i></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-cash fs-4 text-success"></i></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
            </div>
            <li class="app-notification__footer"><a href="#">Todas las notificaciones</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-gear me-2 fs-5"></i>Configuracion</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-person me-2 fs-5"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="Logout"><i class="bi bi-box-arrow-right me-2 fs-5"></i>Salir</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="./images/DouInstructor.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Douglaths Carrascal</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
            <li>
                <a class="app-menu__item" href="<?=base_url();?>/dashboard">
                    <i class="app-menu__icon bi bi-house"></i>
                    <span class="app-menu__label">Inicio</span>
                </a>
            </li>
<?php if (!empty($_SESSION['permisos'][1]['r'])) {?>
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon bi bi-person-gear"></i>
                    <span class="app-menu__label">Administrador</span>
                    <i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">
<?php if (!empty($_SESSION['permisos'][1]['u'])) {?>
                    <li>
                        <a class="treeview-item" href="<?=base_url();?>/roles">
                            <i class="app-menu__icon bi bi-toggles"></i>
                            Roles</a>
                    </li>
                    <?php }?>
                </ul>
            </li>
            <?php }?>
        
        <li><a class="app-menu__item" href="./programas" data-toggle=><i class="app-menu__icon bi bi-list-check"></i><span class="app-menu__label">Programas</span><i class=></i></a>
        </li>
       
        <li><a class="app-menu__item" href="./instructores" data-toggle=><i class="app-menu__icon bi bi-people-fill "></i><span class="app-menu__label">Instuctores</span><i class=></i></a>
        </li>

        <li><a class="app-menu__item" href="competencias" data-toggle=><i class="app-menu__icon bi bi-award-fill"></i><span class="app-menu__label">Competencias</span><i class=></i></a>
        </li>

        <li><a class="app-menu__item" href="perfiles" data-toggle=><i class="app-menu__icon bi bi-person-circle"></i><span class="app-menu__label">Perfiles</span><i class=></i></a>
        </li>

        <li><a class="app-menu__item" href="reportes" data-toggle=><i class="app-menu__icon bi bi-flag-fill"></i><span class="app-menu__label">Reportes</span><i class=></i></a>
        </li>

        <li><a class="app-menu__item" href="soporte" data-toggle=><i class="app-menu__icon bi bi-info-square-fill"></i><span class="app-menu__label">Soporte</span><i class=></i></a>
        </li>
                
      </ul>
    </aside>