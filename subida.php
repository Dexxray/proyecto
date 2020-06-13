<!DOCTYPE html>
<html>
<head>
<title>Cargar Ficheros</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
<style>
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 5px;
}
</style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="content"> </div>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Subir archivo</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-6">
          <form method="POST" action="subir.php" enctype="multipart/form-data">
<div class="form-group">
              <label class="btn btn-primary" for="my-file-selector">
                <input required="" type="file" name="file" id="exampleInputFile">
              </label>
              
</div>
          <button class="btn btn-primary" type="submit">Cargar Fichero</button>
          </form>
        </div>
        <div class="col-lg-6"> </div>
      </div>
    </div>
  
<!--tabla-->
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Archivos Disponibles</h3>
      </div>
      <div class="panel-body">
   
<table class="table">
  <thead>
    <tr>
      <th width="7%">#</th>
      <th width="70%">Nombre del Archivo</th>
      <th width="13%">Descargar</th>
    </tr>
  </thead>
  <tbody>
<?php
$archivos = scandir("archivos");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;
?>
<p>  
 </p>
         
    <tr>
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td><a title="Descargar Archivo" href="archivos/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
    </tr>
 <?php }?> 

  </tbody>
</table>
</div>
</div>
</div>
</div>
</body>
</html>
