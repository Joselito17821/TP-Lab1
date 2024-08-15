<?php
include 'db.php';

$pais = $_POST['pais'];
$oro = $_POST['oro'];
$plata = $_POST['plata'];
$bronce = $_POST['bronce'];

$sql = "INSERT INTO medals (pais, oro, plata, bronce) VALUES ('$pais', '$oro', '$plata', '$bronce')";

if ($conn->query($sql) === TRUE) {
    echo "Medallas registradas con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
?>
