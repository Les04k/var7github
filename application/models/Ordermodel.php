<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordermodel extends CI_Model {
    public function orders($id_user){
    $sql = "SELECT orders.id_order, driver.name, users.fio FROM orders, driver, users WHERE orders.id_drive = driver.id_drive and orders.id_user = users.id_user and orders.id_user = ?";
         $result = $this->db->query($sql, array($id_user));
        return $result->result_array();
}
    public function creates_order($id_drive, $id_user){
        $sql = "INSERT INTO orders( id_drive, id_user) VALUES (?,?)";
        $result = $this->db->query($sql, array($id_drive, $id_user));
        redirect('Location: users/cabinet');
    }
    
    }
?>