    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="logo-canvia" src="<?= media();?>/images/logo.png" alt="User Image">
        <div>
        </div>
      </div>
      <ul class="app-menu">
      <!-- menu reportes -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-file-text-o" aria-hidden="true"></i><span class="app-menu__label">Reportes</span><i class="treeview-indicator fa fa-angle-right"></i></a>       
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url(); ?>/consumo_recursos">
            <i class="fa fa-share" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Consumo Recursos TI</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/tarifario">
            <i class="fa fa-share" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Tarifario TI</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/resumen_servidores">
            <i class="fa fa-share" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Resumen de Servidores</a></li>
          </ul>
        </li>
        <div class="dropdown-divider"></div>
      <!-- menu usuarios -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-users" aria-hidden="true"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="<?= base_url(); ?>/consumo_recursos">
          <i class="fa fa-share" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nuevo Usuario</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/tarifario">
            <i class="fa fa-share" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Gestionar Usuario</a></li>
          </ul>
        </li>
        <div class="dropdown-divider"></div>
      <!-- menu mantenimiento -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-cog" aria-hidden="true"></i><span class="app-menu__label">Calculadora SOW</span><i class="treeview-indicator fa fa-angle-right"></i></a>          
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="<?= base_url(); ?>/consumo_recursos">
          <i class="fa fa-share" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;SOW</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/tarifario">
            <i class="fa fa-share" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Costo mantenimiento</a></li>
          </ul>
        </li>
        
      </ul>
    </aside>