<?php
class crudApp{
private $conn;


public function __construct()
{
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = "" ;
    $dbname = 'crudapp';


    $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$this->conn){
        die("Database Connection Error");
    }



}
public function add_data($data){
    $std_name =$data['name'];
    $std_roll =$data['roll'];
    $std_img =$_FILES['upload_img']['name'];
}


}



?>