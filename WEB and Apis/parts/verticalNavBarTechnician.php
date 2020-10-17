<!-- Vertical navbar --><?php

echo '

<div class="vertical-nav bg-white" id="sidebar">
<div class="px-3 mb-4 mr-10">
<button type="button" class="btn close" 
                data-dismiss="alert" aria-label="Close"> 
                  
                <span aria-hidden="true">×</span> 
            </button> 
</div>
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex justify-content-center">
      
      <img src="http://localhost/UALInventarium/images/role/technician.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        
      
      </div>
      
      <div class="media d-flex justify-content-center">
      <div class="media-body">
          <h5 class="m-0">'.$_SESSION["email"].'</h5>
          <p class="font-weight-light text-muted mb-0">Técnico</p>
        </div>
        </div>
    </div>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Principal</p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="#anadirObjeto" class="nav-link text-dark font-italic bg-light">
                  <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                  +Añadir objeto
              </a>
      </li>
      <li class="nav-item">
        <a href="#gobjetos" class="nav-link text-dark font-italic">
                  <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                  Objetos
              </a>
      </li>
      <li class="nav-item">
        <a href="#solicitudes" class="nav-link text-dark font-italic">
                  <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                  Solicitudes
              </a>
      </li>
      <li class="nav-item">
        <a href="#usuarios" class="nav-link text-dark font-italic">
                  <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                  Usuarios
              </a>
      </li>
      <li class="nav-item">
        <a href="#equiposConfigurados" class="nav-link text-dark font-italic">
                  <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                  Ver equipos configurados
              </a>
      </li>
    </ul>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Administración</p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="#panelAdministrador" class="nav-link text-dark font-italic">
                  <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                  Panel de administrador
              </a>
      </li>
    </ul>
  </div>
  <!-- End vertical navbar -->
  
  
';
?>