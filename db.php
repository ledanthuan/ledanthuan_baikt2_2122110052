<?php 
class Db
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db ="ledanthuan_ltw_ccq2211b";
    private $conn = null;
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db); 
    }
    //lấy ra tất cả
    public function getAll()
    {
        $sql = "SELECT id, name, image, status FROM 0052_brand WHERE status != '0' ";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    //lấy ra một 
    public function getOne($id)
    {
        $sql = "SELECT * FROM 0052_brand WHERE id = '$id' ";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }
    //số lượng
    public function getCount()
    {
        $sql = "SELECT id, name, image, status FROM 0052_brand WHERE status != '0' ";
        $result = $this->conn->query($sql);
        return $result->num_rows;
    }
    //thêm
    public function insert($data)
    {
        $strf ="";
        $strv ="";
        foreach($data as $f=>$v)
        {
            $strf .="$f,";
            $strv .="'$v',";
        }
        $strf = rtrim (rtrim($strf),',');
        $strv = rtrim (rtrim($strv),',');
        $sql = "INSERT INTO 0052_brand($strf) VALUES($strv)";
        $this->conn->query($sql);
    }
    //sửa 
    public function update($data, $id)
    {
        $strset ="";
        foreach($data as $f=>$v)
        {
            $strset .="$f='$v',";
        }
        $strset = rtrim (rtrim($strset),',');
        $sql = "UPDATE 0052_brand SET $strset WHERE id='$id'";  
        $this->conn->query($sql);
    }
    //xóa
    public function delete($id)
    {
        
        $sql = "DELETE FROM 0052_brand WHERE id='$id'";  
        $this->conn->query($sql);
    }

}