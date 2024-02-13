<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylescita.css">
    <title>Feliz 14 de Febrero</title>
</head>
<body>
<div class="Centro">
    <h1> ¿Aceptas tener una cita conmigo? </h1> 
    <img class="img1    " src="invitacion.png" alt="Perdoname por favor">
    <form action="cita.php" method="post">
        
    <!-- haz que solo se pueda seleccionar un radio -->
        <input type="radio" name="opcion" value="si"> Si <br>
        <input type="radio" name="opcion" value="no"> No <br>
        <input type="submit" value="Enviar">

    </form>

    <?php
if(isset($_POST['opcion']) && !empty($_POST['opcion'])) {
    $opcion = $_POST['opcion'];
    if ($opcion == 'si') {
        //redirecciona a una pagina web
        header("Location: https://drive.google.com/file/d/1klUEs43gzyqgnsDT9tlTyxy0WYPzLGde/view");
    } else {
        // Si se selecciona 'No', puedes mostrar un video
        echo "<video width='320' height='240' controls>
                <source src='No.mp4' type='video/mp4'>
              </video>";
        // O redirigir a otra página que contenga el video
         header("Location: No.mp4");
    }
}
?>
</div>
</body>
</html>