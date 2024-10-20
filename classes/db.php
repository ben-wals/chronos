<?php
class db {
    
    protected $con;

    public function __construct($dbHost = 'localhost', $dbUser = 'root', $dbPass = '', $dbName = '') {
        $this->con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        if ( mysqli_connect_errno() ) {
	        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
        }
    }

}

class acc extends db {

    public $username;

    public function __construct($username, $dbHost = 'localhost', $dbUser = 'root', $dbPass = '', $dbName = '') {
        parent::__construct($dbHost, $dbUser, $dbPass, $dbName);
        $this->username = $username;
    }

    public function getAccountInfo($dataKey) {
        $stmt = $this->con->prepare('SELECT ' . $dataKey . ' FROM accounts WHERE username = ?');
        $stmt->bind_param('s', $this->username);
        $stmt->execute();
	    $stmt->store_result();
        $stmt->bind_result($result);
        $stmt->fetch();
        return $result;
    }
    
}

?>