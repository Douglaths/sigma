
<?php
require __DIR__ . '/../Template/header_admin.php'; ?>

<?php
require __DIR__ . '/../Template/nav_admin.php'; ?>

      <div class="app-title">
        <div>
          <h1><i class="bi bi-house"></i> Inicio</h1>
          <p>Sistema de Informacion y Gestion de Modulos Academicos </p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon bi bi-people-fill fs-1"></i>
            <div class="info">
              <h4>Instructores</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon bi bi-list-check fs-1"></i>
            <div class="info">
              <h4>Programas</h4>
              <p><b>50</b></p>
            </div>
          </div>
        </div>
      </div>
      
     <div class="row">
        <div class="col-md-6">
              <div id="salesChart"></div>
            </div>  
          </div>  
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Gestion de Horas - Mensuales</h3>
            <div class="ratio ratio-16x9">
              <div id="supportRequestChart"></div>
            </div>
          </div>
        </div>
      </div>






<?php
require __DIR__ . '/../Template/footer_admin.php'; ?>

