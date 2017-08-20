<?php
  class Connection{

    // visos savybės lokalios naudojamos prisijungimui prie MySql serverio ir connection objektas kuris sukuriamas sėkmingo prisijungimo metu
    private $servername, $username, $password, $dbname, $connection;

    // konstruktoriui paduodamos reikšmės prisijungimui įvykdyti
    function __construct($servername, $username, $password, $dbname){

      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;
      $this->dbname = $dbname;

      // connection savybei priskirama get_connection rezultatas (prisijungimo objektas)
      $this->connection = $this->get_connection();
    }

    private function get_connection(){
      // mysqli klasė kuri sukuria prisijungimo obketą

      $this->connection = new mysqli(
        $this->servername,
        $this->username,
        $this->password,
        $this->dbname);


      if($this->connection->connect_error) {
        die("Connection failed: ");
      }

      // jeigu nėra klaidų grąžinamas prisijungimo objektas
      return $this->connection;
    }

    // funkcija kuri skirta duomenims iš duomenų bazės paimti, sukelti į eilutės objektų masyvą ir grąžinti
    function get_data($sql){

      if ($stmt = $this->connection->prepare($sql)) { // įvykių lentelė rašome MySQL užklausą

        $stmt->execute(); // inicijuojame duomenų paėmimą pagal užklausą

        $result = $stmt->get_result(); // pasiimame gautus rezultatus

        // sudedame gautus rezultatus iš duomenų bazės į masyvą
        while ($row = $result->fetch_assoc()) {
           $rows[] = $row;
        }
      }

      $stmt->close(); // uždarome komandą

      return $rows; // gražiname eilučių objektų masyvą išorei
    }

    function __destruct(){
      $this->connection->close(); // uždarome prisijungimą
    }

  }
 ?>
