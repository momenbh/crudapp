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
    
    $std_name = $data['std_name'];
    $std_roll = $data['std_roll'];
    $std_img = $_FILES['upload_img']['name'];
    $tmp_name = $_FILES['upload_img']['tmp_name'];

     $query ="INSERT INTO students(std_name,std_roll,std_img) VALUE('$std_name','$std_roll','$std_img')";

     if(mysqli_query($this->conn, $query)){
        move_uploaded_file($tmp_name,'upload/'.$std_img);
        return "information added successfully";
     }



  }


}



?>