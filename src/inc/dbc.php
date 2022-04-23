<?php

class DataBaseConnection
{
  private $servername;
  private $username;
  private $password;
  private $dbanme;

  protected function connect()
  {
    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "revpanda";
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    return $conn;
  }
}
