<?php
class db {
    
    private $con;

    public function __construct($dbHost = 'localhost', $dbUser = 'root', $dbPass = '', $dbName = '') {
        $this->con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        if ( mysqli_connect_errno() ) {
	        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
        }
    }
}

class acc extends db {

    public function get($tableName, $dataKey) {
        $stmt = $this->$con->prepare('SELECT ' . $dataKey . ' FROM ' . $tableName . ' WHERE username = ?');
        $stmt->bind_param('s', );
        $stmt->execute();
	    $stmt->store_result();
    }
    
}
?>