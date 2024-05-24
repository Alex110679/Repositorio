<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["idusuarios"] ?>">
          <a href="#" class="d-block"> <?php echo $_SESSION["usu_nom"]?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library 
        
          <li class="nav-item">
            <a href="./..." class="nav-link">
            <i class='bx bxs-home'></i>
              <p>
                Inicio
                
              </p>
            </a>
          </li>-->
          <li class="nav-item">
            <a href="inicio.php" class="nav-link">
            <i class='bx bx-cool'></i>
              <p>
                Inicio
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="menu.php" class="nav-link">
            <i class='bx bx-briefcase'></i>
              <p>
                Menu
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="perfil.php" class="nav-link">
            <i class='bx bxs-universal-access'></i>
              <p>
                Perfil
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="estudios.php" class="nav-link">
            <i class='bx bx-cog'></i>
              <p>
                Estudios
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="informacion_personal.php" class="nav-link">
            <i class='bx bx-info-circle'></i>
              <p>
                Informacion Personal
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="trabajos_realizados.php" class="nav-link">
            <i class='bx bx-expand'></i>
              <p>
                Trabajos Realizados
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="experiencia.php" class="nav-link">
            <i class='bx bx-food-menu'></i>
              <p>
                Experiencia
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="socialMedia.php" class="nav-link">
            <i class='bx bx-group'></i>
              <p>
                Social Media
                
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php BASE_URL;?>logout.php" class="nav-link">
            <i class='bx bx-left-arrow-alt'></i>
              <p>
                Salir
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>