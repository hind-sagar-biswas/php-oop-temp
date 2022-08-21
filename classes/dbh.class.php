<?php

class Dbh {
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $dbName = "phpooptemp";
  
  private $port;

  public function setDbInfo($host, $user, $pass, $db) {
    $this->host = $host;
    $this->user = $user;
    $this->pass = $pass;
    $this->dbName = $db;
  }

  public function setPort(int $port) {
    $this->port = $port;
  }

  protected function connect() {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
    $pdo = new PDO($dsn, $this->user, $this->pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $pdo;
  }
}
