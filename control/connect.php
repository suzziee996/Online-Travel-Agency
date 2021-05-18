<?php
class Database{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname=DB_NAME;

    public $link;
    public $error;
    public $message;

    public function __construct(){

        $this-> connectDB();
    }
    
    

    private function connectDB(){

       $this-> link = new mysqli($this-> host, $this-> user, $this-> pass, $this-> dbname);
       if(!$this-> link){
           $this-> error = "Connection fail".$this->link -> connect_error;
           return false;
       }
    }

    //select or Read data
    public function select ($query){
        $result = $this-> link -> query($query) or die($this -> link -> error.__LINE__);
        if ($result-> num_rows >0) {
            return $result;
        }else{
        return false;
        }
    }

    public function insert($query){
        $insert = $this -> link -> query($query) or die($this -> link -> error.__LINE__);
        if($insert ){
            header("Location:index.php?msg=".urlencode('Data Inserted Successfully'));
            exit();
        }else {
            die("Error:(".$this -> link->errno.")".$this -> link->error);
        }
    }
     
    public function update($query){
        $update = $this -> link -> query($query) or die($this -> link -> error.__LINE__);
        if($update ){
            header("Location:index.php?msg=".urlencode('Data Update Successfully'));
            exit();
        }else {
            die("Error:(".$this -> link->errno.")".$this -> link->error);
        }
    }
    //deletedata
    public function delete($query){
        $delete = $this -> link -> query($query) or die($this -> link -> error.__LINE__);
        if($delete){
            header("Location:index.php?msg=".urlencode('Data Deleted Successfully'));
            exit();
        }else {
            die("Error:(".$this -> link->errno.")".$this -> link->error);
        }
    }
    
    

}