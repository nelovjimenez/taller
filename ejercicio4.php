<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Web</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text white">
                <img src="Img/t.png" height="50px">
            aller Web
            </a>
            <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"id="menu">
        
        <ul class="navbar-nav mr-auto">
         <li class="navbar-item active">
            <a href="index.php" class="nav-link">Inicio</a>
         </li>
         <li class="navbar-item active">
            <a href="ejercicio1.php" class="nav-link">Calculadora</a>
         </li>
         <li class="navbar-item active">
            <a href="ejercicio2.php" class="nav-link">IMC</a>
         </li>
         <li class="navbar-item active">
            <a href="ejercicio3.php" class="nav-link">Spring Step</a>
         </li>
         <li class="navbar-item active">
            <a href="ejercicio4.php" class="nav-link">Salario Semanal</a>
         </li>
         
        </ul>
        </div>
    </nav>
<br><br><br>
<h1 class="text-center">¿Cuanto Ganè esta semana?</h1>
<form class= "mt-3" action="ejercicio3.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1"> </label>
    <input type="number" class="form-control" placeholder="Horas Trabajadas" name="horas" required>
  </div >
  <center>
  <button type="submit" class="btn btn-dark" name="Calculo">Calcular El Salario De Esta Semana</button></center>
</form>

<?php

$horas=0;
if (isset($_POST["Calculo"])){
$horas=$_POST["horas"];
$salario=0;
}
?>

<?php
if ($horas<=40){
    $salario=$horas*20000;
  }
elseif ($horas>40) {
  $salario=$horas * 25000;    
    }

?>

  <h4 class="text-center">
         <?php echo("El resultado de la operación es: ". $salario); ?>
   </h4>

  
<br><br><br><br><br><br><br>

    <footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h2>Mas informacion de la compañia</h1>

                    <p>Esta compañia se dedica a la venta de software integrado con un 
                    conjunto de cosas que no se lo que estoy escribiendo, este 
                    texto es solo para llenara informacion en el cuadro de informacion 
                    de la compañia.</p>

                </div>

                <div class="colum2">

                    <h2>Redes Sociales</h1>

                    <div class="row">
                        <img src="Img/facebook.png">
                        <label>Siguenos en Facebook</label>
                    </div>                    
                    <div class="row">
                        <img src="Img/instagram.png">
                        <label>Siguenos en Instagram</label>
                    </div>

                <div class="colum3">
                    <h2>Informacion Contactos</h1>
                    </div>

                    <div class="row2">
                        <img src="Img/smartphone.png">
                        <label>+57 3195103083</label>
                    </div>

                    <div class="row2">
                        <img src="Img/contact.png">
                         <label>nelovjimenez@hotmail.com</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2020 Todos los Derechos Reservados | <a href="#"> EVJ- MANOLO </a>
                    </div>

                    <div class="information">
                        <a href="#">Informacion Compañia</a> | <a href="#">Privacion y Politica</a> | <a href="#">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>


