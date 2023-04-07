<?php

include 'Connection.php';
$db = new Database();
$Connection = $db->Connection;

class Read {

    private $Connection;
    private $Result;
    private $cmd;
    private $Data;

    public function __construct($db) {
        $this->Connection = $db;
        $this->cmd = "Select * From Song";
        $this->Result = $this->Connection->query($this->cmd);
        while ($row = $this->Result->fetch_assoc()) {
            echo $row['SongName'];
        }
    }
}

$Read = new Read($Connection);

?>