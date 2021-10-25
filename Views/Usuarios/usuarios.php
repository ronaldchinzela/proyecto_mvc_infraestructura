<?php 
    headerAdmin($data); 
    //getModal('modalRoles', $data);
?>
   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><?= $data['page_title'] ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <div class="table-responsive">
            <table class="table table-hover table-bordered" id="tableUsuarios">
             <thead>
                 <tr>
                     <th>Usuario</th>
                     <th>Rol</th>
                     <th>Estado</th>
                     <th>Editar</th>
                 </tr>
             </thead>  
             <tbody>
                 <tr>
                     <td>janco</td>
                     <td>Administrador</td>
                     <td>Activo</td>
                     <td></td>
                 </tr>
             </tbody>
             </table>
            </div>
          </div>
        </div>
      </div>
      </div>
    </main>
<?php footerAdmin($data); ?>