<div class="card rounded" style="width: 25rem;">
<div class="form-group row col-md-12 mb-3">
  <label>Número de objetos</label>
<div class="col-lg-2">
          <div class="input-group">
      <span class="input-group-btn">
          <button type="button" class="quantity-left-minus btn btn-danger btn-number"  onclick="borrarColumna();" data-type="minus" data-field="">
          - 
          <span class="glyphicon glyphicon-minus"></span>
          </button>
      </span>
      <input type="text" id="quantity" name="quantity" class="form-control input-number text-align-center" value="1" min="1" max="50">
      <span class="input-group-btn">
          <button type="button" class="quantity-right-plus btn btn-success btn-number" onclick="anadirColumna();" data-type="plus" data-field="">
          +    
          <span class="glyphicon glyphicon-plus"></span>
          </button>
      </span>
  </div>
</div>
</div>
<div id="myBtn" class="col-md-12 mb-3">
    <label>Ubicación del/los objeto/s*</label>
    <div class="alert alert-warning">
        <a>Debes añadir una ubicación al objeto obligatoriamente</a>.
      </div>
    <input id="botonEscrito" disabled type="text" placeholder="Ubicación" name="ubicacionAuxiliar" class="form-control" required>
    <input id="botonValor" type="hidden" name="ubicacion" required>
    </div>
    <?php include "../selectUbication.php";?>

    <div class="align-content-center">
        <button id="Crear objetos" type="button" onclick="crearObjetos();"class="btn btn-primary">Crear objetos</button>
    </div>
</div>



<script>
//Boton incremental
$(document).ready(function(){
var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>1){
            $('#quantity').val(quantity - 1);
            }
    });
    
});

</script>