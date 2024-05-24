<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda - SSC</title>


    <link rel="icon" type="image/png" href="image/subjefatura-sinfondo.jpg">


    <link rel="stylesheet" href="css/estilo.css"/>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.rtl.min.css">  
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">    
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.min.css"> 
    <link rel="stylesheet" href="css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.rtl.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">


</head>
<body>

    <div class="container-fluid">
      <div class="text-center fs-1 fw-bold">  
      <p>División Apoyo y Seguimiento</p> 
     </div> 
     <div class="text-center fs-3">
        <p>Superintendencia de Seguridad Comunitaria</p>
    </div>
    </div>
    <br>
    
<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->conexionDB();

try {
    if (isset($_POST['tipo_busqueda']) && isset($_POST['termino_busqueda'])) {
        $tipoBusqueda = $_POST['tipo_busqueda'];
        $terminoBusqueda = $_POST['termino_busqueda'];
        $campoBusqueda = '';

        if ($tipoBusqueda === 'hechos_esclarecidos' && isset($_POST['hechos_busqueda'])) {
            $campoBusqueda = $_POST['hechos_busqueda'];
            $sql = "SELECT id, n_sumario, dep_instructora, caratula, magis_interventor, num_sum_relacionado, cant_allanamientos, cant_aut_detenidos FROM provisorio.hechos_esclarecidos_ssc WHERE LOWER($campoBusqueda) LIKE LOWER(:terminoBusqueda)";
        } elseif ($tipoBusqueda === 'detenidos' && isset($_POST['detenidos_busqueda'])) {
            $campoBusqueda = $_POST['detenidos_busqueda'];
            $sql = "SELECT id, n_sumario, dep_instructora, dni, apellido, nombre, fecha_nac, edad, genero, nacionalidad, domicilio FROM provisorio.detenidos_ssc WHERE LOWER($campoBusqueda) LIKE LOWER(:terminoBusqueda)";
        } else {
            echo "Consulta no válida.";
            exit;
        }

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':terminoBusqueda', '%' . $terminoBusqueda . '%', PDO::PARAM_STR);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Mostrar resultados en una tabla HTML (similar al ejemplo anterior)
        if (is_array($resultados) && count($resultados) > 0) {
            echo "<div style='padding: 10px;'>";
            echo "<div class='table-responsive'>";
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead class='thead-dark'>";
            echo "<tr>";
            if ($tipoBusqueda === 'hechos_esclarecidos') {
                echo "<th>ID</th>";
                echo "<th>Núm. Sumario</th>";
                echo "<th>Dependencia Instructora</th>";
                echo "<th>Carátula</th>";
                echo "<th>Magistrado Interventor</th>";
                echo "<th>Núm. Sumarios Relacionados</th>";
                echo "<th>Cantidad de Allanamientos</th>";
                echo "<th>Cantidad de Autores</th>";
            } elseif ($tipoBusqueda === 'detenidos') {
                echo "<th>ID</th>";
                echo "<th>Núm. Sumario</th>";
                echo "<th>Dep. Instructora</th>";
                echo "<th>Apellido</th>";
                echo "<th>Nombre</th>";
                echo "<th>DNI</th>";
                echo "<th>F.Nac.</th>";
                echo "<th>Edad</th>";
                echo "<th>Gen.</th>";
                echo "<th>Nac.</th>";
                echo "<th>Domicilio</th>";
            }
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($resultados as $resultado) {
                echo "<tr>";
                if ($tipoBusqueda === 'hechos_esclarecidos') {
                    echo "<td>" . htmlspecialchars($resultado['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['n_sumario']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['dep_instructora']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['caratula']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['magis_interventor']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['num_sum_relacionado']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['cant_allanamientos']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['cant_aut_detenidos']) . "</td>";
                } elseif ($tipoBusqueda === 'detenidos') {
                    echo "<td>" . htmlspecialchars($resultado['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['n_sumario']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['dep_instructora']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['apellido']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['nombre']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['dni']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['fecha_nac']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['edad']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['genero']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['nacionalidad']) . "</td>";
                    echo "<td>" . htmlspecialchars($resultado['domicilio']) . "</td>";
                }
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "No se encontraron resultados.";
        }
    } else {
        echo "No se recibieron parámetros válidos.";
    }
} catch(PDOException $e) {
    echo "Error al realizar la consulta: " . $e->getMessage();
}
?> 




































    
    


    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.esm.js"></script>
    <script src="js/bootstrap.esm.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>







    <footer>    
      <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-0">© 2024 Diseñado por la División Apoyo y Seguimiento.</p>
      </div>
    </div>
</footer>

</body>
</html>