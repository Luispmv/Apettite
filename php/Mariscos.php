<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariscos</title>
     <link rel="icon" href="../styles/icon/image-removebg-preview copy.svg">
     <link rel="stylesheet" href="../styles/catalogos.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="cabecera-principal">
        <a href="../index.html" id="Appetite"><img src="../styles/icon/image-removebg-preview copy.svg" alt="">ppetite to go</a>
        <div class="dropdown">
          <a href="#seccionFrase" id="SobreNosotros">Nosotros</a>
          <a href="#ordenar" id="Ordenar">Ordenar</a>
          <button class="btn" type="button" data-bs-toggle="dropdown" >
            <a href="" id="Productos">Platillos</a>
            <img src="../styles/icon/menu_FILL0_wght400_GRAD0_opsz48.svg" alt="">
          </button>
          <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="#seccionFrase" id="sn">Nosotros</a></li>
            <li><a class="dropdown-item" href="#ordenar" id="o">Ordenar</a></li>
            <li><a class="dropdown-item" href="" id="p">Platillos</a></li>
            <li><a class="dropdown-item" href="#queso">Quesos</a></li>
            <li><a class="dropdown-item" href="#marisco">Mariscos</a></li>
            <li><a class="dropdown-item" href="#pasta">Pastas</a></li>
            <li><a class="dropdown-item" href="#ensalada">Ensalada</a></li>
            <li><a class="dropdown-item" href="#paella">Paella</a></li>
            <li><a class="dropdown-item" href="./Menu.pdf" target="_blank">Menu completo</a></li>
          </ul>
        </div>
</div>
<div class="container">
        <?php
            include("./conexion.php");
                $query = "SELECT * FROM Mariscos";
                $resultado = $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
                    ?>

                    <div class = "card">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']);?>" alt="">
                        <h4><?php echo $row['nombrePlatillo']; ?></h4>
                        <p><?php echo $row['Descripcion']; ?></p>
                        <a href="#" style = "text-decoration: none; color: black">Comprar</a>
                    </div>
               <?php
                }
        ?>
</div>
<footer>
         <div class="contacto">
            <li><a href=""id="sr">Sobre Nosotros</a></li>
            <li><a href="" id="pr">Productos</a></li>
            <li><a href="" id="contacto">Contacto</a></li>
            <div class="fb">
                <img src="../styles/icon/facebook.svg" alt="">
                </div>
                <div class="Ig">
                <img src="../styles/icon/instagram.svg" alt="">
              </div>
            </div>
         <div class="imagen">
            <img src="../styles/img/platoPerfecto.png" alt="">
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>