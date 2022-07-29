<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
  echo '<script language="javascript">
    window.location.href = "../index.php";
  </script>';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <link rel="stylesheet" href="../STATIC/css/styles1.css">
</head>

<body>

  <main class="main-curso">
    <section class="cat-top">
      <div class="cat-top-texto">
        <h1>Bienvenido Admin!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, porro id! Pariatur quasi nihil quidem corrupti. Libero quas architecto reiciendis recusandae, qui error natus ab necessitatibus optio voluptatum tempora possimus modi incidunt, accusantium a tempore enim nam facere rerum odit?</p>
      </div>
    </section>
  </main>

</body>

</html>