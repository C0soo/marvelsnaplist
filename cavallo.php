<?php
// Connessione al database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "marvel_snap";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Funzione per visualizzare le carte disponibili
function visualizzaCarte() {
    global $conn;
    $sql = "SELECT * FROM carte";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Nome: " . $row["nome"] . " - Descrizione: " . $row["descrizione"] . "<br>";
        }
    } else {
        echo "Nessuna carta trovata";
    }
}

// Funzione per aggiungere una carta al carrello
function aggiungiAlCarrello($carta_id) {
    // Codice per aggiungere la carta al carrello
}

// Funzione per creare un account utente
function creaAccount($username, $password, $email) {
    // Codice per creare un nuovo account utente nel database
}

// Funzione per accedere all'account utente
function login($username, $password) {
    // Codice per verificare le credenziali e accedere all'account
}

// Funzione per visualizzare le informazioni dell'account utente
function visualizzaProfilo($user_id) {
    // Codice per recuperare e visualizzare le informazioni dell'account utente
}

// Funzione per gestire le varianti di una carta
function gestisciVarianti($carta_id) {
    // Codice per visualizzare e gestire le varianti di una carta
}

// Esempio di utilizzo delle funzioni
// Visualizza tutte le carte disponibili
echo "Carte Disponibili:<br>";
visualizzaCarte();

// Esempio di aggiunta di una carta al carrello
aggiungiAlCarrello(1);

// Esempio di creazione di un nuovo account utente
creaAccount("utente1", "password123", "utente1@example.com");

// Esempio di accesso all'account utente
login("utente1", "password123");

// Esempio di visualizzazione del profilo utente
visualizzaProfilo(1);

// Esempio di gestione delle varianti di una carta
gestisciVarianti(1);

// Chiudi la connessione al database
$conn->close();
?>
