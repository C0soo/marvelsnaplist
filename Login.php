<?php

class Login {

    private $databaseConnection;

    public function __construct(DatabaseConnection $databaseConnection) {
        $this->databaseConnection = $databaseConnection;
    }

    public function authenticate($username, $password) {
        $connection = $this->databaseConnection->getConnection();

        $sanitizedUsername = mysqli_real_escape_string($connection, $username);
        $sanitizedPassword = mysqli_real_escape_string($connection, $password); // Hash password before comparison

        $sql = "SELECT id, nome, cognome FROM utenti WHERE nome = '$sanitizedUsername' AND password = '$sanitizedPassword'"; // Use prepared statements for enhanced security

        $result = $connection->query($sql);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            return new User($row['id'], $row['nome'], $row['cognome'], null); // Omit password for security
        } else {
            return null; // Login failed
        }
    }
}
