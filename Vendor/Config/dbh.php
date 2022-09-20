<?php

namespace Vendor\Config;

use mysqli;

class dbh{

    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;

    protected function connect(){
        $this->dbhost = "localhost";
        $this->dbuser = "root";
        $this->dbpass = "";
        $this->dbname = "test";
        
        $conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);

        return $conn;
    }
}
?>