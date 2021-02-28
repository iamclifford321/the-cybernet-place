<?php
  /**
   * config class for database configuration
   */
  class Config
  {

    private $host = 'remotemysql.com';
    private $username = '1IthgDGCDZ';
    private $password = 'RIwfGm7DK5';
    private $db = '1IthgDGCDZ';

    protected function connect(){
      $pdo = new PDO( 'mysql:host=' . $this->host . ';dbname=' . $this->db, $this->username, $this->password );
      return $pdo;
    }

  }
