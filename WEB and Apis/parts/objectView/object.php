<div id="insideGOContainer" class="row justify-content-center">
</div>

<div class="container-fluid mt-4"><div id="insideContainer" class="row"></div></div>
<?php include "modifyGroupObjects.php"; ?>
</div>
<script src="parts/objectView/object.js"></script>

<!-- Modal -->
<div class="modal fade" id="objetosKit" style="width:100%;" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width:24rem;">
      <div class="modal-header">
        <h5 class="modal-title">Objetos del Kit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="contenedorObjetosKit">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-block" onclick="showModalCrearObjetoDelKit()">Añadir nuevo objeto del kit</button>
      </div>
    </div>
  </div>
</div>

<script>

async function actualizarDatos(id){
  $("#ventanaFlotante").modal("hide");
  await realizarConsulta("apis/modificacion/modificarGrupoDeObjetos.php", {idGrupoObjetos: id, nombre:$("#nombreGO").val(), marca:$("#marcaGO").val(), modelo:$("#modeloGO").val()});
  await cargarPagina();
}
async function eliminarDatos(id){
  $("#ventanaFlotante").modal("hide");
  await realizarConsulta("apis/eliminacion/eliminarGrupoDeObjetos.php", {idGrupoObjetos: id});
  await cargarPagina();
}

cargarObjetos();

</script>
<?php include "createObjectKit.php";?>