<?php
$conn = new mysqli("localhost","root","","test");
$user = $_POST['username'];
$pass = $_POST['password'];
$stmt = $conn->prepare("SELECT * FROM users where useranme=?");
$stmt = bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();
if($row = $result->fetch_assoc()) {
    if (password_verify($pass, $row['password'])){
        echo "Accesso sicuro riuscito!";
    }else{
        echo "Credenziali errate.";
    }
}else{
    echo "Utente non trovato";
}

?>
