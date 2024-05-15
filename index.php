<?php
// Includere le classi
require_once('DatabaseConnection.php');
require_once('User.php');
require_once('Login.php');

// Stabilire la connessione al database
$databaseConnection = DatabaseConnection::getInstance();
$login = new Login($databaseConnection);

// Ottenere i dati dal form
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Tentare l'autenticazione
    $user = $login->authenticate($username, $password);

    if ($user) {
        // Login riuscito, reindirizzare o mostrare un messaggio di benvenuto
        echo "Benvenuto, " . $user->getNome() . " " . $user->getCognome() . "!";
        // Opzionale: avviare una sessione per mantenere l'utente loggato
    } else {
        echo "Login fallito. Riprova.";
    }
}
?>
