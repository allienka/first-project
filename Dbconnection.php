<?php
class Database {

  private $host, $database, $username, $password, $connection;
 //classconstruct
  function __construct($host, $username, $password, $database,  $autoconnect = true) {
    $this->host = $host;
    $this->database = $database;
    $this->username = $username;
    $this->password = $password;
    if($autoconnect) $this->open();
  }

  /**
  * Open the connection to your database.
  */
  function open() {
    $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
  }

  /**
  * Close the connection to your database.
  */
  function close() {
    $this->connection->close();
  }
// this  general function to exceute any kind of query
  function query($query) {
    return $this->connection->query($query);
  }

}
?>