<?php
echo "<h1>Openshift Workshop v4.0</h1> ";
echo "<h2>Usando o Liveness / Readiness</h2>";
echo "<h2>WEBHOOKS</h2>";
echo $_SERVER['SERVER_ADDR'];

echo "<br><hr>";

echo "<h1>MySQL 1.0</h1> ";

echo "<br><hr>";

echo "<h2>Cidades cadastradas no Banco de Dados:</h2>";
$conn = new mysqli("mysql", "redhat", "redhat@123", "workshop");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT nome FROM cidade");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["nome"] . "</h3>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
