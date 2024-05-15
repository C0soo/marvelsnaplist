<?php

class User {

    private $id;
    private $nome;
    private $cognome;
    private $password;

    public function __construct($id, $nome, $cognome, $password) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    // Consider adding a getter for password (hashed) for potential future use
    // but avoid returning the actual password for security reasons.
}
