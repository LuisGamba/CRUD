
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
crossorigin="anonymous">
</head>
<body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Producto</h1>
    <br>
    <div class="container">
        <form action="../CRUD/InsertarDatos.php" method="POST"> 
            <label for="">Categorias</label>
            <select class="form-select mb-3" name="CategoriaP">
                <option select disabled>--Seleccionar categoria--</option>
                <?php
                include ("../Config/Conexion.php");

                
                $sql = $conexion->query("SELECT * FROM categorias");
                while ($resultado = $sql->fetch_assoc()){
                    echo "<option value='".$resultado['Id']."'>".$resultado['NombreCategoria']."</option>";
                }
            ?> 
          </select>
          <label for="">Marcas</label>
          <select class="form-select mb-3" name="MarcaP">
            <option selected disabled>--Seleccionar marca--</option>
            <?php
                include ("../Config/Conexion.php");

                $sql = $conexion->query("SELECT * FROM marcas");
                while ($resultado = $sql->fetch_assoc()){
                    echo "<option value='".$resultado['Id']."'>".$resultado['NombreMarca']."</option>";
                }
            ?>
        </select>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" name="Precio">
        </div>
        <div class="mb-3">
            <label class="form-label">descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
        <div class="mb-3">
            <label class="form-label">nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar </button>
            <a href="../Index.php" class="btn btn-dark">Regresar</a>
        </div>

    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>