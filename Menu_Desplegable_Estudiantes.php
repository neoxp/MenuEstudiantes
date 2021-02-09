<?php
  $mysqli = new mysqli('mysql.webcindario.com', 'testblog', 'admin123', 'testblog');

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Estudiantes">
<meta name="author" content="Emili">
<head>
  <title>Menu Desplegable Estudiantes</title>
  <meta charset=utf-8" />
  <style>
  body {
  color: #999999;
  margin: 40px;
}

.wrapper {
  display: grid;
  grid-template-columns: 100px 100px 100px;
  grid-gap: 10px;
  background-color: #fff;
  color: #444;
}

.box {
  background-color: #444;
  color: #fff;
  border-radius: 5px;
  padding: 20px;
  font-size: 150%;
}

.button {
  background-color: #442;
  color: #fff;
  border-radius: 5px;
  padding: 20px;
  font-size: 150%;
}

	

  
  .textofont {
	color: #0000CC;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
  </style>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
<div class="wrapper" id="wrapper">
	<h1 class="textofont">Menu Desplegable Estudiantes:</h1>
	<div class="box 1"><select>
       <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM Estudiantes");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id].'">'.'</option>';
          }
        ?>
      </select></div> 
	  <div class="box 2"></div>
	  <div class="box 3">
	<div class="box 4"><select>
        <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM Estudiantes");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[nombre].'">'.'</option>';
          }
        ?>
      </select></div>
	  <div class="box 5"></div>
	<div class="box 6"><select>
        <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM Estudiantes");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[apellido].'">'.'</option>';
          }
        ?>
		<div class="box 7"></div>
      </select></div>
		<div class="button"><button>Enviar</button></div>
</div>
 
</body>

</html>