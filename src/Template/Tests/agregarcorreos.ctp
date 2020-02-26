
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
      $.ajax({
                type: "GET",
                url: "<?php echo $this->Url->build(['controller'=>'Tests','action'=>'Actualizar']);?>",
                success: function (data, textStatus){
                    alert('Funciona');

                },
                data:{
                  correo:document.getElementById('emailInput').value
                }
                  
            });
    });
    $("#btnConfirmar").click(function(){
      window.location.href = "/appEncuestas/UserTests/insertardatabd/?"+'url=amazon.com'+'&max_date='+'20-03-2020'+'&id_test='+1;
      /*
        $.ajax({
                  type: "GET",
                  url: "<?php echo $this->Url->build(['controller'=>'UserTests','action'=>'insertardatabd']);?>",
                  success: function (data, textStatus){
                      alert('Funciona');
                  },
                  data:{
                    url:document.getElementById('URLInput').value,
                    max_date: document.getElementById('max_date').value,
                    id_test: <?php echo $_GET['id_test']?>
                  }
                    
              });
              */
              
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
        <th scope="row">2</th>
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
          <label for="">Fecha maxima</label>
          <input type="date" class="form-control" id="max_date" aria-describedby="emailHelp" placeholder="Ingresa fecha maxima">
        </div>
        <button  id="btn" class="btn btn-primary">Agregar</button>
    </div>
  </div>
  <button  id="btnConfirmar" class="btn btn-primary">Confirmar</button>
</div>