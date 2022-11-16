<?php
include 'class.db.php';
class DB_TheLoai extends DB{
    function __construct()
    {
        parent::__construct();
    }

    public function get_TheLoai($idTL=-1)
    {
        $query='select * from theloai';
        if($idTL != -1) $query .= " WHERE idTL=$idTL"; 
        $result = $this->db_query($query);
        $theloai = array();
        $i=0;
        while($row = $this->db_fetch($result)){
            $theloai[$i++] = $row;
        }
        return $theloai;
    
    }


        /**
     * 
     * @param string $name ten the loai
     * @param tinyint $sort sap xep
     * @param tinyint $show an hien
     * @return true on success, false on fail
     */


     public function them_TheLoai($ten,$thutu,$hien){
        $result = $this->db_query(
            $query = "INSERT INTO theloai(TenTL, ThuTu, AnHien) VALUES('$ten', '$thutu', '$hien')"
        );
        return $result;
     }



         /**
     * Sua the loai
     * @param int $id id cua the loai
     * @param string $name ten the loai
     * @param tinyint $sort sap xep
     * @param tinyint $show an hien
     * @return true on success, false on fail
     */

     public function sua_TheLoai($idTL,$ten,$thutu,$hien){
        $result =  $this->db_query(
            $query = "UPDATE theloai SET TenTL='$ten', ThuTu='$thutu', AnHien='$hien' WHERE idTL=$idTL"
        );
        return $result;
     }


     
    /**
     * Xoa the loai co id la $id
     * @param int $id cua the loai
     * @return true on success, false on fail
     */
    public function xoa_TheLoai($idTL){
        $query = "DELETE FROM theloai WHERE idTL=$idTL";
        $result = $this->db_query(
            $query 
        );
        return $result;
    }
}
?>