<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD RELACIONAL</title>
    <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilladataTables.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <br>
    <div class="container">
    <h1 class="text-center" style="background-color:white; border-radius: 5px;">LISTADO DE APRENDICES</h1>
    </div>
    <br>
    <div class="container">
    <table class="table table-bordered" id="tabla">
        <thead class="table table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Categoria</th>
                <th scope="col">Marca</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require("Config/Conexion.php");

            $sql = $conexion->query("SELECT * FROM productos
            INNER JOIN categorias ON productos.CategoriaId = categorias.Id
            INNER JOIN marcas ON productos.MarcaId = marcas.Id
            ");

            while ($resultado = $sql->fetch_assoc()) {
            ?>

            <tr>
                <th scope="row"><?php echo $resultado['IdProducto']?></th>
                <th scope="row"><?php echo $resultado['NombreCategoria']?></th>
                <th scope="row"><?php echo $resultado['NombreMarca']?></th>
                <th scope="row"><?php echo $resultado['Precio']?></th>
                <th scope="row"><?php echo $resultado['DescripcionProducto']?></th>
                <th scope="row"><?php echo $resultado['Nombre']?></th>
                <th>
                    <a href="Formularios/EditarForm.php?Id=<?php echo $resultado['IdProducto']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="CRUD/EliminarDatos.php?Id=<?php echo $resultado['IdProducto']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </th>
            </tr>

            <?php
            }
            ?>


        </tbody>
        </table>
            <div class="container">
                <a href="Formularios/AgregarForm.php" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i>   Agregar Producto</a>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/af4e4ce068.js" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
            <script src="http://code.jquery.com/jquery.com/jquery-3.3.1.min.js"></script>

    <script>
        var tabla =document.querySelector("#tabla")
        var datatable= new DataTable(tabla)
    </script>
    
</body>
</html>