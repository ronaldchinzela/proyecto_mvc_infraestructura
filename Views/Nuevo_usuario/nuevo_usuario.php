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
      
      <form id="form-generar-usuario" action="" method="post">
      <span id="span-nombre">Nombres: <input type="text" name="nombres" id="input-nombre-nuevo-usuario" placeholder="Ingrese el nombre"></span><br>
      <span id="span-apellido">Apellidos: <input type="text" name="apellidos" id="input-apellido-nuevo-usuario" placeholder="Ingrese los apellidos"></span><br>
      <span id="span-correo">Correo: <input type="email" name="correo" id="input-correo-nuevo-usuario" placeholder="Ingrese el correo"></span><br>
      <span id="span-celular">Celular: <input type="text" name="celular" id="input-celular-nuevo-usuario" placeholder="Ingrese número de celular"></span><br>
      <span id="span-password">Password: <input type="password" name="password" id="input-password-nuevo-usuario" placeholder="Escriba una contraseña"></span><br>
      <!-- Combox de rol extrayendo data de la bd  -->
      <label for="rol" class="label-rol">Rol:</label>
      <select id="cbo-rol" name="rol">
      <option selected="true" disabled="disabled">Seleccionar</option>                                     
      </select>
      
          <!-- Combox de actividad  -->
      <label for="rol" class="label-estado" style="visibility:hidden">Estado:</label>
      <select id="cbo-estado" name="estado" style="visibility:hidden">                                 
          <option selected disabled = "false" value="2">Inactivo</option>  
          <option selected = "true" value="1">Activo</option>                                    
      </select><br>
      <input class="btn-generar-usuario" type="submit" value="Generar usuario" name="user">
      <input class="ver-listado-usuarios" type="button" value="Ir a listado" onclick="location.href='../usuarios/gestionar_usuario.php'">
      </form>

      </div>
    </div>
  </div>
</div>
</div>
</main>
<?php footerAdmin($data); ?>