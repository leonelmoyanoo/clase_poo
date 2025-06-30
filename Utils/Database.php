<?php
class Database{
    private $host;
    private $user;
    private $password;
    private $database;

    public function __construct() {
        $this->host = 'db';
        $this->user = 'db';
        $this->password = 'db';
        $this->database = 'db';
    }

    public function connect() {
        return new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->password);
    }
}