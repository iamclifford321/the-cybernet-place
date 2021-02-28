<?php
  /**
   * config class for database configuration
   */
  class Config
  {

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'thecybernetplace';

    protected function connect(){
      $pdo = new PDO( 'mysql:host=' . $this->host . ';dbname=' . $this->db, $this->username, $this->password );
      return $pdo;
    }

  }
