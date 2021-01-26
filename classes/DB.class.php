<?php
class DB{
	private $dbHost     = "localhost";
    private $dbUsername = "cyber-tech";
    private $dbPassword = "cyberTech@dec";
    private $dbName     = "cyber_tech";
    public  $tblName     = "";

    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
                // echo "connect";
            }
        }
    }
    public function all_in_one_row($tblname){
        $sql = "SELECT * FROM " .$tblname ;
        $result = $this->db->query($sql);
        
        return $result->fetch_assoc();
    } 

     public function checkRow_assoc($conditions = array()){
        $sql = 'SELECT * FROM '.$this->tblName;
        if(!empty($conditions) && is_array($conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }

        $result = $this->db->query($sql);
        $result_fetch_assoc=$result->fetch_assoc();
        return !empty($result->num_rows > 0)?$result_fetch_assoc:false;
    } 

    public function checkRow($conditions = array()){
        $sql = 'SELECT * FROM '.$this->tblName;
        if(!empty($conditions) && is_array($conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }

        $result = $this->db->query($sql);
        $result_fetch_assoc=$result->fetch_assoc();
        return !empty($result->num_rows > 0)?true:false;
    } 

    public function insert($data){
        if(!empty($data) && is_array($data)){
            $columns = '';
            $values  = '';
            $i = 0;
            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $columns .= $pre.$key;
                $values  .= $pre."'".$val."'";
                $i++;
            }
            $query = "INSERT INTO ".$this->tblName." (".$columns.") VALUES (".$values.")";
            $insert = $this->db->query($query);
            // return $insert?$this->db->id:false;
            return $insert?true:false;
        }else{
            return false;
        }
    }



    public function update($data,$conditions){
        if(!empty($data) && is_array($data)){
            $colvalSet = '';
            $whereSql = '';
            $i = 0;
            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $colvalSet .= $pre.$key."='".$val."'";
                $i++;
            }
            if(!empty($conditions)&& is_array($conditions)){
                $whereSql .= ' WHERE ';
                $i = 0;
                foreach($conditions as $key => $value){
                    $pre = ($i > 0)?' AND ':'';
                    $whereSql .= $pre.$key." = '".$value."'";
                    $i++;
                }
            }
            $query = "UPDATE ".$this->tblName." SET ".$colvalSet.$whereSql;
            $update = $this->db->query($query);
            return $update?$this->db->affected_rows:false;
        }else{
            return false;
        }
    }
}



?>