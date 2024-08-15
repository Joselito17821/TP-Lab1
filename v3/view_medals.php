<?php
include 'db.php';

$sql = "SELECT * FROM medals";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medallero Olímpico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Medallero Olímpico</h1>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>País</th>
                    <th>Oro</th>
                    <th>Plata</th>
                    <th>Bronce</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["pais"]. "</td><td>" . $row["oro"]. "</td><td>" . $row["plata"]. "</td><td>" . $row["bronce"]. "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>No hay datos</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary">Volver</a>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
