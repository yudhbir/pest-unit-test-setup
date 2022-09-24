<?php
class Users{
    public $db;
    public function __construct($servername = "localhost",$username = "root",$password = "",$dbname = "db_bulkammo"){
        $this->db = $conn = new mysqli($servername, $username, $password, $dbname);
    }
    public function fetch_user(){
        $sql = "SELECT id, name, email FROM users";
        $result = $this->db->query($sql);
        $final_array=[];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {               
                $final_array[]=$row;
            }           
            return ['success'=>true,'results'=>$final_array];
        } else {
            // $this->debug($final_array);
            return ['success'=>false,'results'=>$final_array];
        }
    }
    public function fetch_single_user(){
        $sql = "SELECT id, name, email FROM users where id=1";
        $result = $this->db->query($sql);
        $result=$result->fetch_assoc(); 
        if (!empty($result)) { 
            return ['success'=>true,'results'=>$result];
        } else {
            // $this->debug($final_array);
            return ['success'=>false,'results'=>$result];
        }
    }
    public function debug($var = null)
    {
        echo "<pre>";print_r($var);echo "</pre>";
    }
}