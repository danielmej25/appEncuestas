
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>

<head>
<?php echo $this->Html->css('correos');?>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="utf-8">
</head>
<script>
function contarRows(){
        var totalRowCount = 0;
        var rowCount = 0;
        var tabla = document.getElementById ("tablaCorreos");
        var filas = tabla.getElementsByTagName ("tr");
        
        return filas.length-1;

}
</script>
<script>   

$(document).ready(function() {
  $("#btn").click(function(){
    alert("Entra sin problema");
/*  
    var email=document.getElementById('emailInput').value;
    var URL=document.getElementById('URLInput').value;
    var table =document.getElementById('tablaCorreos');
    var row = table.insertRow(-1);
    // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var numero = contarRows();
    cell1.innerHTML=""+numero;
    cell2.innerHTML=""+email;
*/

  $.ajax({
					type: "post",
					url: "actualizarDatos.php",
					data:{
            cedula:"1235"
					},
					success: function (response) {
						alert("Correcto");   
					}
		});

  });
});
</script>
<div class="contenedor">
  <div class="tablaFlexible">
    <table id="tablaCorreos" class="table tableSize">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Correo</th>
        </tr>
      </thead>
      <tbody>
        <tr class="dato">
          <th scope="row">1</th>
          <td>Mark</td>
        </tr>
        <tr class="dato"> 
        <th scope="row">1</th>
          <td>Mark</td>
        </tr> 
      </tbody>
    </table>
  </div>

  <div class="formFlexible">
    <div class="contenedorForm">
      <div class="form-group">
          <labelm>URL de la pagina a evaluar</label>
          <input id="URLInput" class="form-control" placeholder="Ingresa URL" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <button type="submit" id="btn" class="btn btn-primary">Agregar</button>
    </div>
  </div>
</div>