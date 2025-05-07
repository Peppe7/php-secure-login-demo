<?php
// Simula vulnerabilità (no prepared statements, nessun controllo)
$conn = mysqli("localhost","root","","test");
$user = $_POST["username"];
$pass = $_POST["password"];
$result = $conn->query("SELECT * from users WHERE username='$user' AND password='$pass');
if($result->num_rows >0){
  echo "Accesso Eseguito";
}else{
  echo "Accesso negato";
}
?>
