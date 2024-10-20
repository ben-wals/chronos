<?php

// Defines the parent database (db) class.
class db {
    
    // Defines the attribute that holds the connection to the given database.
    // It is "protected" meaning it can only be accesed within the class or its children.
    protected $con;

    // The constructor function runs upon the instantiation of each new db object.
    // It takes the database credentials as arguments.
    public function __construct($dbHost = 'localhost', $dbUser = 'root', $dbPass = '', $dbName = '') {

        // Establishes the connection to the database.
        $this->con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        // Checks if the connection resulted in any errors.
        if ( mysqli_connect_errno() ) {

            // Returns any errors to the user and breaks the program.
	        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
        
        }
    }
}

// Defines the accounts (acc) class as a child of the database (db) class.
class acc extends db {

    // Defines the attribute that holds the users username
    // This is required for all database queries
    public $username;

    // The constructor function runs upon the instantiation of each now acc object.
    // It takes the arguments required for the db class constructor as well as a username.
    public function __construct($username, $dbHost = 'localhost', $dbUser = 'root', $dbPass = '', $dbName = '') {
        
        // Runs the parents constructor class with the given argurments
        parent::__construct($dbHost, $dbUser, $dbPass, $dbName);

        // Sets the username attribute to that which was parsed in the function 
        $this->username = $username;
    }

    // The getAccountInfo function gets specified data from the accounts table
    // It takes 1 argument of the dataKey (ColumnName) for the required data field
    public function getAccountInfo($dataKey) {

        // Prepares an SQL statement to obatin the specified field using the dataKey 
        $stmt = $this->con->prepare('SELECT ' . $dataKey . ' FROM accounts WHERE username = ?');
        
        // Binds the username (as a string) to the SQL statement in the place of "?"
        $stmt->bind_param('s', $this->username);

        // Executes the SQL statement
        $stmt->execute();

        // Stores the results of the statement
	    $stmt->store_result();

        // Binds the stored results to the results variable
        $stmt->bind_result($result);

        // Fetches the next results row
        $stmt->fetch();

        // Returns the results
        return $result;
    }
    
}

?>