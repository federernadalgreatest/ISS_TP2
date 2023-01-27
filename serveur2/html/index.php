<h1>Je te test!</h1>
<h4>Tentative de connexion MariaDB depuis Serveur2..</h4>
<?php 
$host = 'mariadb2';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
} 
echo "Connexion réussie à MariaDB2!";
?>
