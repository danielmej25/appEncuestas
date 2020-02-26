<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test[]|\Cake\Collection\CollectionInterface $tests
 */

?>

<head>
<?php echo $this->Html->css('circulos');?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="utf-8">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>


<?php 
$max= count($tests);
$arrayTests=array();
$i=0;
foreach ($tests as $test) {
    $arrayTests[$i] = $test;
    $i=$i+1;
}
$mitad= (int) (count($tests)/2);
?>

<script>
$(document).ready(function() {
  $(".card").click(function(){
    window.location.href = "agregarcorreos/?"+'id_test='+$(this).attr('id');
  });
});
</script>
<div class="contenedor">
    <?php for ($i=0; $i < $mitad; $i++): ?>
        <div class="card animacion mb-3" id="<?= h($arrayTests[$i]->id_test) ?>" style="max-width: 20rem; margin-top:2rem">
        <div class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?= h($arrayTests[$i]->name_test)  ?></font></font></div>
        
            <div class="card-body text-black ">
                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descripcion</font></font></h4>
                <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?= h($arrayTests[$i]->description_test) ?></font></font></p>
            </div>
        
        </div>
    <?php endfor; ?>

    <?php for ($i=$mitad; $i < $max; $i++): ?>
        <div class="card animacion text-black  mb-3" id="<?= h($arrayTests[$i]->id_test) ?>" style="max-width: 20rem;">
        <div class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?= h($arrayTests[$i]->name_test)  ?></font></font></div>
        
            <div class="card-body">
                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descripcion</font></font></h4>
                <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?= h($arrayTests[$i]->description_test) ?></font></font></p>
            </div>
        </div>
    <?php endfor; ?>
    <form >

        <p>Usuario: <input type="text" name="usuario"></p>

        <p>Contraseña: <input type="password" name="pass"></p>

        <p><button type="submit">Enviar formulario</button></p>

    </form>
</div>
