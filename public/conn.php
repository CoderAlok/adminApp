<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'test');
define('TBNAME', 'tbl_stud');

// $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die($conn);

class Connect
{
    public $conn;
    public function __construct($dbhost, $dbuser, $dbpass, $dbname)
    {
        // return $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die($conn);
        return $this->conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    }
}

// $con = new Connect(DBHOST, DBUSER, DBPASS, DBNAME);
$con = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

// if ($con) {
//     echo 'Connected successfully.';
// } else {
//     echo 'Failed';
// }

// Insert data
// $sql    = "INSERT INTO ".TBNAME."(`name`, `age`) VALUES ('Alok Das', 15)";
// $result = $con->query($sql);

// if ($result == true) {
//     echo "New record created successfully.";
// } else {
//     echo "Error:" . $sql . "<br>" . $con->error;
// }

// $con->close();

// Retrieve data
$sql = "SELECT * FROM " . TBNAME . " LIMIT 1, 7";

$result = $con->query($sql);
$row    = $result->fetch_all();

echo '<pre>';
print_r($row);
echo '</pre>';

// Update data
// $name = 'Alok';
// $sql  = "UPDATE " . TBNAME . " SET name = '" . $name . "' WHERE id = 2";

// $result = $con->query($sql);
// if ($result) {
//     echo 'Student updated successfully.';
// } else {
//     echo "Error:" . $sql . "<br>" . $con->error;
// }

// Delete data
// $id  = 6;
// $sql = "DELETE FROM " . TBNAME . " WHERE id = " . $id;

// $result = $con->query($sql);
// if ($result) {
//     echo 'Student deleted successfully.';
// } else {
//     echo "Error:" . $sql . "<br>" . $con->error;
// }
