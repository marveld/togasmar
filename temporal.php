<!-- Aca pongo los pedasos de codigo que dejo de usar por un tiempo -->

<!-- Registro de PROVEEDOR -->
<div class="col-md-9 col-md-offset-2 oculto" id="registroProveedor">
    <p class="intro-text">¿Tenés moto, auto, flete, etc.?<br>Cargá tus datos abajo y ofrecé el servicio que quieras</p>
    <form  class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="form-group">
          <label class="col-sm-2 control-label" for="nombre">Nombre</label>
            <div class="col-sm-10"> <input type="text" class="form-control" placeholder="Ingrese Nombre"></div>
              <label class="col-sm-2 control-label" for="nombre">Apellido</label>
            <div class="col-sm-10"> <input type="text" class="form-control" placeholder="Ingrese Apellido"></div>
              <label class="col-sm-2 control-label" for="nombre">DNI</label>
            <div class="col-sm-10"> <input type="text" class="form-control" placeholder="DNI"></div>
              <label class="col-sm-2 control-label" for="nombre">e-mail</label>
            <div class="col-sm-10"> <input type="text" class="form-control" placeholder="Ingrese e-mail"></div>
        </div>

<div class="form-group">
<label>Tipo de Vehiculo</label>
   <div class="row">
     <div class="col-sm-9 col-md-offset-2">
       <select class="form-control" name="vehiculo">
         <option value="">Vehiculo</option>
         <?php foreach($vehiculos as $numero => $nombre){?>
           <option value="<?php echo $numero; ?>"><?php echo $nombre; ?></option>
           <?php } ?>
       </select>
     </div>
            <div class="col-sm-9 col-md-offset-2">
              <select class="form-control" name="marca">
                <option value="">Marca</option>
                <?php foreach($marcasAutos as $numero => $nombre){?>
                  <option value="<?php echo $numero; ?>"><?php echo $nombre; ?></option>
                  <?php } ?>
              </select>
            </div>
        <div class="col-sm-9 col-md-offset-2">
          <select class="form-control" name="modelo">
            <option value="">Modelo</option>
            <?php for($anio = date('Y'); $anio >= (date('Y')-50); $anio--){?>
              <option value="<?php echo $anio; ?>"><?php echo $anio; ?></option>
              <?php } ?>
          </select>
        </div>
       </div>
    </div>
    <div class="form-group">
          <label>Alcance del servicio:
               <div class="checkbox col-sm-9 col-md-offset-2">
                   <?php foreach($alcances as $numero => $nombre){?>
                       <label>
                         <input type="checkbox" name="alcance[]" value="<?php echo $numero; ?>">
                         <?php echo $nombre; ?>
                        </label>
                     <?php } ?>
               </div>
          </label>
    </div>

      <br>
            <button type="button" class="btn btn-success btn-lg" aria-label="Left Align">
                <span class="fa fa-floppy-o" aria-hidden="true"></span> Enviar
            </button>
    </form>
</div>
<!-- Fin Registro de PROVEEDOR -->
